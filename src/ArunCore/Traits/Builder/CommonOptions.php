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

namespace ArunCore\Traits\Builder;


trait CommonOptions
{

    /**
     * Check the option --disabled from commandline
     *
     * @return string
     */
    public function isEnabled()
    {
        return $this->hasOption("disabled") ? "false" : "true";
    }

    /**
     * Check the option --synopsis from command line and return the text
     *
     * @return string
     */
    public function getSynopsis()
    {
        !$this->hasOption("synopsis") ?
            $synopsis = "No Description present" :
            $synopsis = $this->getOptionValue("synopsis");

        return $synopsis;
    }

    /**
     * Check the option --type from command line and return the text
     *
     * @param string $default
     * @return string
     */
    public function getType($default = "")
    {
        !$this->hasOption("type") ? $type = $default : $type = $this->getOptionValue("type");

        return strtolower($type);
    }

    /**
     * Check the option --default from command line and return the text
     *
     * @param string $default
     * @return string
     */
    public function getDefault($default = "")
    {
        !$this->hasOption("default") ? $defaultValue = $default : $defaultValue = $this->getOptionValue("default");

        return $defaultValue;
    }

}