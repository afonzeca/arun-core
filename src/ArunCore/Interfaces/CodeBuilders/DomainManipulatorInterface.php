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

interface DomainManipulatorInterface
{
    /**
     * Search the last bracket "}" of a code file for a specified Class
     *
     * @param $domainClass
     * @return mixed
     *
     * @throws
     */
    public function getLastCurlBracketPositionFromClass($domainClass);

    /**
     *
     * Add an "action code schema (.skm file) to the end of the Class
     *
     * @param $domainClass
     * @param $actionSchema
     * @return mixed|string
     *
     * @throws
     */
    public function addSchemaToClassBottom($domainClass, $actionSchema);

    /**
     * Create a domain file according to parameters
     *
     * @param string $domainName
     * @param string $synopsis
     * @param string $enabledString
     * @param bool $force
     *
     * @return bool
     */
    public function createDomain(string $domainName, string $synopsis, string $enabledString, bool $force): bool;

    /**
     * Add an action code(method) to the domain code (class)
     *
     * @param string $domainName
     * @param string $actionName
     * @param string $synopsis
     * @param bool $disabled
     *
     * @return bool
     */
    public function addActionIntoDomain(string $domainName, string $actionName, string $synopsis, string $enabledString): bool;

}