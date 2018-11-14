<?php
/**
* This file is part of "Arun-Core" Core Library for "Arun - CLI Microframework for Php7.2+" released under the following terms
 *
 * Copyright 2018 Angelo FONZECA ( https://www.linkedin.com/in/angelo-f-1806868/ )
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * Linkedin contact ( https://www.linkedin.com/in/angelo-f-1806868/ ) - Project @ https://github.com/afonzeca/arun
 *
 */

namespace ArunCore\Core\CodeBuilders;

use ArunCore\Core\Domain\DomainActionNameGenerator;
use ArunCore\Interfaces\IO\FileContentGeneratorInterface;
use ArunCore\Interfaces\IO\ConsoleOutputInterface;
use ArunCore\Traits\Builder\CommonOptions;
use ArunCore\Traits\Builder\PlaceholderManipulator;
use ArunCore\Traits\Builder\DomainMessages;
use ArunCore\Traits\Builder\CommonMessages;
use ArunCore\Interfaces\CodeBuilders\DomainManipulatorInterface;

class DomainManipulator implements DomainManipulatorInterface
{
    use PlaceholderManipulator, DomainMessages, CommonMessages;

    /**
     * @var FileContentGeneratorInterface $fileMan
     */
    private $fileMan;

    /**
     * @var ConsoleOutputInterface $cOut
     */
    private $cOut;

    /**
     * DomainManipulator constructor.
     *
     * @param FileContentGeneratorInterface $fileGen
     * @param ConsoleOutputInterface $cOut
     */
    public function __construct(
        FileContentGeneratorInterface $fileGen,
        ConsoleOutputInterface $cOut
    ) {
        $this->fileMan = $fileGen;
        $this->cOut = $cOut;
    }

    /**
     * Get the Last Curl Bracket of a class
     * 
     * @param $domainClass
     * @param $matches
     * @return mixed
     *
     * @throws
     */
    public function getLastCurlBracketPositionFromClass($domainClass)
    {
        $matches = [];

        $lastClassCurlBracketPattern = "/\}[ \r\n]*[^{}]\$/";
        preg_match($lastClassCurlBracketPattern, $domainClass . " ", $matches, PREG_OFFSET_CAPTURE);
        $lastClassBracketIdx = $matches[0][1];

        if ($lastClassBracketIdx == 0) {
            throw new \Exception("Can't append function");
        }

        return $lastClassBracketIdx;
    }

    /**
     * Append an action schema to an existing class
     *
     * @param $domainClass
     * @param $actionSchema
     * @return mixed|string
     *
     * @throws
     */
    public function addSchemaToClassBottom($domainClass, $actionSchema)
    {
        $lastClassBracketIdx = $this->getLastCurlBracketPositionFromClass($domainClass);

        $domainClass = substr_replace($domainClass, $actionSchema, $lastClassBracketIdx);
        $domainClass .= "\r}";

        return $domainClass;
    }

    /**
     * Create a domain class
     *
     * @param string $domainName
     * @param string $synopsis
     * @param string $enabledString
     * @param bool $force
     *
     * @return bool
     */
    public function createDomain(string $domainName, string $synopsis, string $enabledString, bool $force = false): bool
    {
        $domainClassName = DomainActionNameGenerator::getDomainClassName($domainName);

        $domainSchemaCode = $this->fileMan->loadSchemaCode("Domain");

        $this->generatingDomainMsg($domainName);

        if ($domainSchemaCode != null) {

            if ($enabledString == "false") {
                $this->domainGeneratedAsDisabledMsg();
            }

            $this->setSynopsisMsg($synopsis);

            $this->replaceParam("DOMAINNAME", $domainClassName, $domainSchemaCode);
            $this->replaceParam("SYNOPSIS", $synopsis, $domainSchemaCode);
            $this->replaceParam("ENABLED", $enabledString, $domainSchemaCode);

            $isStored = $this->fileMan->storeDomainCode($domainName, $domainSchemaCode, $force);

            if ($isStored) {
                $this->domainCreatedMsg($domainClassName);
                return true;
            }

            $this->domainNotCreatedMsg($domainClassName);
            return false;
        }

        $this->schemaNotFoundMsg($domainName);
        return false;
    }

    /**
     * Add a method (action) to a domain(class)
     *
     * @param string $domainName
     * @param string $actionName
     * @param string $synopsis
     * @param $enabledString
     *
     * @return bool
     */
    public function addActionIntoDomain(string $domainName, string $actionName, string $synopsis, string $enabledString): bool
    {
        $domainClassCode = $this->fileMan->loadDomainCode($domainName);

        if ($domainClassCode != null) {

            if ($this->isActionMethodAlreadyPresent($actionName, $domainClassCode)) {
                $this->actionAlreadyDefinedMsg($actionName);
                return false;
            }

            $actionSchema = $this->fileMan->loadSchemaCode("Action");

            $this->generatingActionMsg($actionName);
            $this->setSynopsisMsg($synopsis);

            if ($enabledString == "false") {
                $this->actionGeneratedAsDisabledMsg();
            }

            $this->replaceParam("ACTIONNAME", $actionName, $actionSchema);
            $this->replaceParam("SYNOPSIS", $synopsis, $actionSchema);
            $this->replaceParam("ENABLED", $enabledString, $actionSchema);

            $domainClassCode = $this->addSchemaToClassBottom($domainClassCode, $actionSchema);
            $isStored = $this->fileMan->storeDomainCode($domainName, $domainClassCode, true);

            if ($isStored) {
                $this->actionCreatedMsg($domainName);
                return true;
            }

            $this->domainNotCreatedMsg($domainName);
            return false;
        }

        $this->domainNotFoundMsg($domainName);
        return false;
    }

    /**
     * Check if the Action method is already present in the domain class code
     *
     * @param string $actionName
     * @param string $domainClassCode
     *
     * @return bool
     */
    private function isActionMethodAlreadyPresent(string $actionName, string $domainClassCode): bool
    {
        $functionPattern = '/public function[ \t\n\r]+' . $actionName . '[ \t\n\r]*\([ \t\r\n]*.*[ \t\r\n]*\)/';

        return preg_match($functionPattern, $domainClassCode) > 0 ? true : false;
    }

}