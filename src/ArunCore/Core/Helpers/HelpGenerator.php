<?php
/**
 * This file is part of "Arun-Core" Core Library for "Arun CLI Microframework" released under the following terms
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
 * Linkedin contact ( https://www.linkedin.com/in/angelo-f-1806868/ ) - Project @ https://github.com/afonzeca/arun-core
 *
 * Linkedin contact ( https://www.linkedin.com/in/angelo-f-1806868/ ) - Project @ https://github.com/afonzeca/arun-core
 *
 * Generates the help screen
 *
 * First Release Date:18/10/18
 * First Release Time:20.26
 */

namespace ArunCore\Core\Helpers;


use ArunCore\Core\Domain\DomainActionNameGenerator;
use ArunCore\Interfaces\Core\HelpGeneratorInterface;
use ArunCore\Interfaces\Helpers\LowLevelHelperInterface;
use ArunCore\Interfaces\IO\ConsoleOutputInterface;

class HelpGenerator implements HelpGeneratorInterface
{
    /**
     * @var ConsoleOutputInterface
     */
    private $cOut;

    /**
     * @var LowLevelHelperInterface
     */
    private $lHelper;

    /**
     * HelpGenerator constructor.
     *
     * @param LowLevelHelperInterface $lHelper
     * @param ConsoleOutputInterface $cOut
     */
    public function __construct(
        LowLevelHelperInterface $lHelper,
        ConsoleOutputInterface $cOut
    )
    {
        $this->lHelper = $lHelper;
        $this->cOut = $cOut;
    }

    /**
     * Generates different messages according to the "global" param
     *
     * @param string $className
     * @param string $domain
     * @param bool $global
     *
     * @throws \ReflectionException
     */
    public function makeHelpMessage(string $className, string $domain, bool $global = false): void
    {
        $domainSynop = $this->lHelper->getDomainSynopsis($className);

        $this->helpMessageHeader($domain, $domainSynop);

        if (!$global) {
            $methodsList = $this->lHelper->getClassPublicMethods($className, $domain);
            $actions = $this->lHelper->getEnabledActionsAnnotations($methodsList);
            $this->helpMessageBody($domain, $actions);
            return;
        }

        $this->helpMessageGlobalBody($this->lHelper->getSynopsisFromDomains());
    }

    /**
     * Thanks to reflection, the method analyzes every method (action) from the class(domain)
     * and describe them according to parameter characteristic (e.g. type hint and if it is optional)
     *
     * @param  \Reflector[] $parameters
     * @return bool
     */
    private function printParameterSyntax(array $parameters): bool
    {
        if (count($parameters) > 0) {
            foreach ($parameters as $param) {

                $sc = "<";
                $ec = ">";
                $default = "";

                if ($param->isOptional()) {
                    $sc = "[";
                    $ec = "]";
                    $default = $param->getDefaultValue();
                }

                $this->cOut->write($sc . $param->name);

                if ($default != "") {
                    echo "=$default";
                }
                $this->cOut->write($ec . " ");
            }

            return true;
        }

        return false;
    }

    /**
     * @param string $domain
     * @param string $helpMessage
     *
     */
    private function helpMessageHeader(string $domain, string $helpMessage): void
    {
        $this->cOut->blank();
        $this->cOut->writeln("#RED#Arun Microframework " . getenv("APP_VERSION") . "#DEF# - (C) 2018 by Angelo Fonzeca (Apache License 2.0)");
        $this->cOut->blank();
        $this->cOut->writeln("#LGRAY#" . ucfirst($domain) . ": " . $helpMessage . "#DEF#");
        $this->cOut->blank();
    }

    /**
     *
     * This method uses the ConsoleOutput for producing the help file on the screen for a specific domain
     *
     * @param string $domain
     * @param array $actions
     * @throws \ReflectionException
     */
    private function helpMessageBody(string $domain, array $actions): void
    {
        $classInstance = DomainActionNameGenerator::getFQDNClass($domain);

        $this->cOut->writeln("Usage: ");
        $this->cOut->blank();
        $this->cOut->writeln("  #BLUE#$domain#DEF#:#BLUE#ACTION#DEF# [options] [arguments]");
        $this->cOut->blank();

        $this->cOut->writeln("Where ACTIONs are:");
        $this->cOut->blank();
        $class = new \ReflectionClass($classInstance);

        foreach ($actions as $name => $desc) {

            $parameters = $class->getMethod($name)->getParameters();


            $this->cOut->writeln("#CYAN#" . $name . "#DEF#");
            if (isset($desc[0])) {
                $this->cOut->write("  #LGRAY#Description:#DEF# " . $desc[0] . "\r\n");
            }

            if (count($parameters) > 0) {
                $this->cOut->write("  #LGRAY#Parameters :#DEF# ");
            }

            if ($this->printParameterSyntax($parameters)) {
                $this->cOut->blank();
            }

            if (isset($desc["options"])) {
                foreach ($desc["options"] as $option) {
                    $this->cOut->write("  #LGRAY#Option     :#DEF# #PURPLE#" . $option[0]);
                    $this->cOut->writeln("#DEF##LBLUE# ( " . $option[1] . " )#DEF#");
                }
            }

            $this->cOut->blank();
        }
    }

    /**
     * This method users the ConsoleOutput for producing the help file on the screen for all the domains (global help)
     *
     * @param array $help
     */
    private
    function helpMessageGlobalBody(array $help): void
    {
        $this->cOut->writeln("Usage: ");
        $this->cOut->blank();
        $this->cOut->writeln("  #BLUE#DOMAIN#DEF#:#BLUE#ACTION#DEF# [options] [arguments]");
        $this->cOut->blank();
        $this->cOut->writeln("Available DOMAINS (set of aggregate commands) are:");
        $this->cOut->blank();

        foreach ($help as $name => $item) {

            if ($name == "default") {
                $name = "'no parameters'";
            }

            $this->cOut->write("  #BLUE#" . $name . "#DEF#");

            if ($item != "") {
                $this->cOut->write(": " . $item . "\r\n");
            }
            $this->cOut->blank();
        }

        $this->cOut->writeln("Please write " . $_SERVER["SCRIPT_FILENAME"] . " DOMAIN:help to list the ACTIONS available for a DOMAIN");
        $this->cOut->blank();
    }


}