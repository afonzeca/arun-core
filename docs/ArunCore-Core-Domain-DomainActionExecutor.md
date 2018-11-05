ArunCore\Core\Domain\DomainActionExecutor
===============






* Class name: DomainActionExecutor
* Namespace: ArunCore\Core\Domain
* This class implements: [ArunCore\Interfaces\Domain\DomainActionExecutorInterface](ArunCore-Interfaces-Domain-DomainActionExecutorInterface.md)




Properties
----------


### $cInput

    private \ArunCore\Interfaces\IO\ConsoleInputInterface $cInput

Used for storing the object which contains parsed parameters from CommandLine



* Visibility: **private**


### $container

    private \DI\FactoryInterface $container

Factory for non-static classes



* Visibility: **private**


### $lHelper

    private \ArunCore\Interfaces\Helpers\LowLevelHelperInterface $lHelper

An Helper class for analyzing a class that represents a Domain



* Visibility: **private**


Methods
-------


### __construct

    mixed ArunCore\Core\Domain\DomainActionExecutor::__construct(\DI\FactoryInterface $container, \ArunCore\Interfaces\Helpers\LowLevelHelperInterface $lHelper, \ArunCore\Interfaces\IO\ConsoleInputInterface $ConsoleInput)

DomainAction constructor.

Needs a Factory for making objects and a class set of support class

The initial parameters/dependencies are taken one time from container instantiated according to the console params.

This class is a stateless service, so no setters are present.

* Visibility: **public**


#### Arguments
* $container **DI\FactoryInterface**
* $lHelper **[ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)**
* $ConsoleInput **[ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)**



### exec

    boolean ArunCore\Interfaces\Domain\DomainActionExecutorInterface::exec(string $className, string $domain, string $action)

Get DOMAIN:ACTION and parameters processed from a Class which adheres to DomainActionNameGeneratorInterface
check if the number of parameters from cli corresponds to class parameters that manages the DOMAIN:ACTION
This EXEC method uses Factory for making the Class (because DOMAINS are not services, we do not store them into the
container)



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Domain\DomainActionExecutorInterface](ArunCore-Interfaces-Domain-DomainActionExecutorInterface.md)


#### Arguments
* $className **string**
* $domain **string**
* $action **string**



### makeObjectAndRunMethod

    mixed ArunCore\Core\Domain\DomainActionExecutor::makeObjectAndRunMethod(string $className, string $domain, string $action, array $realParameters)





* Visibility: **private**


#### Arguments
* $className **string**
* $domain **string**
* $action **string**
* $realParameters **array**




LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
