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
 * The App class "kickstarts" the ArunCore.
 * The Arun applications work only with a DI Container, so you had to inject one with setContainer method before running
 * the APP.
 *
 * At the moment all the Arun functionalities are supported by PHP-DI ( http://php-di.org/ )
 *
 *
 * First Release Date:09/10/18
 * First Release Time:15.45
 */

namespace ArunCore\Core;

use MongoDB\Driver\Exception\ExecutionTimeoutException;
use Psr\Container\ContainerInterface;

class App
{
    /**
     * @var ContainerInterface
     */
    private static $container;

    /**
     * App constructor.
     */
    public function __construct(ContainerInterface $container)
    {
        self::$container = $container;
    }

    /**
     * Makes Object from Container
     *
     * @param string $interfaceName
     *
     * @return \Object
     *
     * @throws \Exception
     */
    public static function make(string $interfaceName)
    {
        if (self::$container === null) {
            throw new \Exception("Undefined DI Container");
        }

        try {
            return self::$container->get($interfaceName);
        } catch (\Exception $ex) {
            echo "Unable to find Interface inside container " . $ex->getMessage();
        }
    }

    /**
     * Here the magic starts! ;-)
     *
     * @throws \Exception
     */
    function run()
    {
        if (self::$container != null) {

            self::$container
                ->make("ArunCore\Interfaces\Core\ArunCoreInterface")
                ->start();

            return;

        }

        throw new \Exception("A 'DI CONTAINER', WHICH ADHEREs TO PSR11, MUST BE SET!");
    }
}