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
 * Output messages for "gen" domain, common to Domain and Actions
 *
 */

namespace ArunCore\Traits\Builder;

trait CommonMessages
{

    /**
     * Domain not found error
     *
     * @param string $domainName
     */
    private function domainNotFoundMsg(string $domainName): void
    {
        $this->cOut->blank();
        $this->cOut->writeln(sprintf("Sorry Domain #RED#%sDomain#DEF# not found!", ucfirst($domainName)));
        $this->cOut->blank();
    }

    /**
     * Show the value of the synopsis option
     *
     * @param string $synopsis
     */
    public function setSynopsisMsg(string $synopsis): void
    {
        $this->cOut->writeln("* Synopsis set to \"$synopsis\"");
    }
}