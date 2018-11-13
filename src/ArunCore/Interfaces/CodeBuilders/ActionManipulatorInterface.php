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

namespace ArunCore\Interfaces\CodeBuilders;

interface ActionManipulatorInterface
{
    /**
     * Add a Parameter to a method of a class code file
     *
     * @param string $actionName
     * @param string $newParam
     * @param string $domainClassCode
     *
     * @return string
     */
    public function addActionParameter(string $actionName, string $newParam, string $domainClassCode): string;

    /**
     * Check if a method (action) exists and add a parameter to a method of a class code file
     *
     * @param string $domainName
     * @param string $actionName
     * @param $domainClass
     * @param $newParam
     *
     * @return bool
     */
    public function checkActionAndStoreParameter(
        string $domainName,
        string $actionName,
        string $domainClass,
        string $newParam
    ): bool;

    /**
     * Add a parameter to an action code (method)
     *
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
    ): bool;
}