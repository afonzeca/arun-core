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
 * This trait contains Output Messages for "gen" Domain
 */

namespace ArunCore\Traits\Builder;


trait DomainMessages
{
    /**
     * @param $className
     */
    private function domainCreatedMsg($className): void
    {
        $this->cOut->blank();
        $this->cOut->writeln("Done! Please check #RED#app/Console/Domains/{$className}.php#DEF#");
        $this->cOut->blank();
    }

    /**
     * @param $className
     */
    private function domainNotCreatedMsg($className): void
    {
        $this->cOut->blank();
        $this->cOut->writeln("Sorry! Cannot write #RED#app/Console/Domains/{$className}.php#DEF# for adding your code.");
        $this->cOut->blank();
        $this->cOut->writeln("#RED#If the file already exists, and you want OVERRIDE all code, run arun again and use the option --force or -f#DEF#");
        $this->cOut->blank();
    }

    /**
     * @param string $domainName
     */
    private function schemaNotFoundMsg(string $domainName): void
    {
        $this->cOut->blank();
        $this->cOut->writeln(sprintf("Sorry Schema not found!", ucfirst($domainName)));
        $this->cOut->blank();
    }

    /**
     * @param string $domainName
     */
    private function actionCreatedMsg(string $domainName): void
    {
        $this->cOut->blank();
        $this->cOut->writeln("Action created! Please check #RED#app\Console\Domains\\{$domainName}Domain.php#DEF# for adding your code");
        $this->cOut->blank();
    }

    /**
     * @param string $domainName
     */
    private function generatingActionMsg(string $domainName): void
    {
        $this->cOut->blank();
        $this->cOut->writeln(sprintf("Generating action #RED#%s#DEF# for you.", ucfirst($domainName)));
        $this->cOut->blank();
    }

    /**
     * @param string $domainName
     */
    private function generatingDomainMsg(string $domainName): void
    {
        $this->cOut->blank();
        $this->cOut->writeln(sprintf("Generating #RED#%s#DEF# for you.", ucfirst($domainName)));
        $this->cOut->blank();
    }

    private function actionAlreadyDefinedMsg(string $actionName): void
    {
        $this->cOut->blank();
        $this->cOut->writeln(sprintf("Action #RED#%s#DEF# is already present!", $actionName));
        $this->cOut->blank();
        $this->cOut->writeln("Please remove it manually from the code and start the process again.");
        $this->cOut->blank();
    }


    private function domainGeneratedAsDisabledMsg(): void
    {
        $this->cOut->writeln("* The domain has been generated as #RED#DISABLED#DEF#. Please modify the class annotation to #LGRAY#@SET\DomainEnabled(true)#DEF# otherwise the DOMAIN will be not available!");
    }

    private function actionGeneratedAsDisabledMsg(): void
    {
        $this->cOut->writeln("* The action has been generated as #RED#DISABLED#DEF#. Please modify the class annotation to #LGRAY#@SET\DomainEnabled(true)#DEF# otherwise the ACTION will be not available!");
    }


}