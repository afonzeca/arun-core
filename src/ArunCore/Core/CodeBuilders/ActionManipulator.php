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

use ArunCore\Interfaces\IO\ConsoleOutputInterface;
use ArunCore\Interfaces\IO\FileContentGeneratorInterface;
use ArunCore\Traits\Builder\CommonMessages;
use ArunCore\Traits\Builder\CommonOptions;
use ArunCore\Traits\Builder\PlaceholderManipulator;
use ArunCore\Interfaces\CodeBuilders\ActionManipulatorInterface;
use ArunCore\Traits\Builder\ActionMessages;
use ArunCore\Traits\Builder\DomainMessages;

class ActionManipulator implements ActionManipulatorInterface
{
    use PlaceholderManipulator, ActionMessages, CommonMessages;

    /**
     * @var FileContentGeneratorInterface $fileMan
     */
    private $fileMan;

    /**
     * @var ConsoleOutputInterface $cOut
     */
    private $cOut;

    /**
     * ActionManipulator constructor.
     * @param FileContentGeneratorInterface $fileGen
     * @param ConsoleOutputInterface $cOut
     */
    public function __construct(
        FileContentGeneratorInterface $fileGen,
        ConsoleOutputInterface $cOut
    )
    {
        $this->fileMan = $fileGen;
        $this->cOut = $cOut;
    }

    /**
     * @param string $functionPattern
     * @param string $newParam
     * @param string $domainClassCode
     *
     * @return string
     *
     * @TODO BAD CODE! MUST BE RE-WRITTEN
     */
    public function addActionParameter(string $actionName, string $newParam, string $domainClassCode): string
    {
        $functionPattern = '/public function[ \t\n\r]+' . $actionName . '[ \t\n\r]*\([ \t\r\n]*.*[ \t\r\n]*\)/';

        $class = preg_replace_callback(
            $functionPattern,
            function ($match) use ($newParam) {

                $matches = [];
                $params = [];
                $actionMethod = $match[0];

                $insideBracketsPattern = '/\([ \t\r\n]*.*[ \t\r\n]*\)/';

                preg_match($insideBracketsPattern, $actionMethod, $params);
                $paramsString = preg_replace('/\s+/', '', $params[0]);

                // Define params separator (void if the paramater to be added is the first parameter else ", " if the number of the parameters is greater then 0)
                $separator = ($paramsString == "()") ? "" : ", ";

                // Check if the parameter is already present inside the function
                $splittedParam = explode(" ", $newParam);
                $paramNameVal = (count($splittedParam) == 2) ? $splittedParam[1] : $splittedParam[0];
                $parameterName = (explode("=", $paramNameVal))[0];

                // If the parameter is not present... add it to the method!
                if (strpos($paramsString, $parameterName) == false) {

                    $lastBracketPattern = "/\)[ \r\n\t]*[^()]\$/";
                    preg_match($lastBracketPattern, $actionMethod . " ", $matches, PREG_OFFSET_CAPTURE);

                    if (count($matches) == 0) {
                        return $actionMethod;
                    }

                    return substr_replace($actionMethod, "{$separator}{$newParam})", $matches[0][1]);
                }

                throw new \Exception("Parameter already exists!");
            },
            (string)($domainClassCode)
        );

        $newParam = "* @var " . $newParam . "\r\n     * @SET\ActionEOA(\"$actionName\")";

        return str_replace("* @SET\ActionEOA(\"$actionName\")", $newParam, $class);
    }

    /**
     * @param string $domainName
     * @param string $actionName
     * @param string $domainClass
     * @param string $newParam
     *
     * @return bool
     */
    public function checkActionAndStoreParameter(
        string $domainName,
        string $actionName,
        string $domainClass,
        string $newParam
    ): bool
    {
        $functionPattern = '/public function[ \t\n\r]+' . $actionName . '[ \t\n\r]*\([ \t\r\n]*.*[ \t\r\n]*\)/';

        if (preg_match($functionPattern, $domainClass)) {

            $domainClass = $this->addActionParameter($actionName, $newParam, $domainClass);
            $this->fileMan->storeDomainCode($domainName, $domainClass, true);

            return true;
        }

        return false;
    }

    /**
     * @param string $domainName
     * @param string $actionName
     * @param string $paramName
     * @param string $type
     * @param string $defaultValue
     *
     * @return bool
     */
    public function addParameterToAction(
        string $domainName,
        string $actionName,
        string $paramName,
        string $type,
        string $defaultValue
    ): bool
    {
        $domainClassCode = $this->fileMan->loadDomainCode($domainName);

        if ($domainClassCode != null) {

            $this->addingParameterMsg($domainName, $actionName, $paramName);

            $type = strtolower($type);

            if ($defaultValue != "") {
                $this->cOut->write(sprintf(" Default value #RED#%s#DEF#", $defaultValue));

                if ($type == "string" || $type == "") {
                    $defaultValue = sprintf("'%s'", addslashes($defaultValue));
                }

                $defaultValue = "=" . $defaultValue;
            }

            $newParam = sprintf("%s \$%s%s", $type, $paramName, $defaultValue);

            $isParameterStored = $this->checkActionAndStoreParameter(
                $domainName,
                $actionName,
                $domainClassCode,
                $newParam
            );

            if ($isParameterStored) {
                $this->parameterAddedMsg($domainName);
                return true;
            }

            $this->actionNotFoundMsg($domainName, $actionName);
            return false;
        }

        $this->domainNotFoundMsg($domainName);
        return false;
    }
}

