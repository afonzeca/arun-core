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
 *
 * First Release Date:11/10/18
 * First Release Time:16.03
 */

namespace ArunCore\Interfaces\Security;

interface SanitizerInterface
{
    /**
     * Strip unauthorized chars from array
     *
     * @param array $parameters
     * @return array
     */
    public function stripBadCharsFromArray(array $parameters, array $optionalChars = []): array;

    /**
     * Strip unauthorized chars from string
     *
     * @param string $parameter []
     * @param array $optionalChars
     * @return string
     */
    public function stripBadChars(string $parameter, array $optionalChars = []): string;

    /**
     * Check CLASS name (according to the definition from PHP Manual)
     *
     * @param string $className
     * @return bool
     */
    public function isClassNameValid(string $className): bool;

    /**
     * Check correct filename
     *
     * @param string $parameter
     * @return bool
     */
    public function isFilenameValid(string $parameter): bool;
}