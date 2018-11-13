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
 * This trait contains Output Messages for "gen" Domain actions
 */

namespace ArunCore\Traits\Builder;

trait ActionMessages
{

    /**
     * @param string $domainName
     * @param string $actionName
     */
    private function actionNotFoundMsg(string $domainName, string $actionName): void
    {
        $this->cOut->blank();
        $this->cOut->blank();
        $this->cOut->write(sprintf("#RED#Sorry action #RED#%s#DEF#@#LGRAY#%s#DEF# #RED#not found!#DEF#", $domainName, $actionName));
        $this->cOut->blank();
    }

    /**
     * @param string $domainName
     * @param string $actionName
     * @param string $paramName
     */
    private function addingParameterMsg(string $domainName, string $actionName, string $paramName): void
    {
        $this->cOut->blank();
        $this->cOut->write(sprintf("Adding parameter #RED#%s#DEF# to action #RED#%s#DEF#@#LGRAY#%s#DEF# for you.", $paramName, $domainName, $actionName));
    }

    /**
     * @param string $domainName
     */
    private function parameterAddedMsg(string $domainName): void
    {
        $this->cOut->blank();
        $this->cOut->blank();
        $this->cOut->writeln("Parameter created!Please check #RED#app\Console\Domains\\{$domainName}Domain.php#DEF# for adding your code");
        $this->cOut->blank();
    }

}