ArunCore\Core\ArunCore
===============






* Class name: ArunCore
* Namespace: ArunCore\Core
* This class implements: [ArunCore\Interfaces\Core\ArunCoreInterface](ArunCore-Interfaces-Core-ArunCoreInterface.md)




Properties
----------


### $executor

    private \ArunCore\Interfaces\Domain\DomainActionExecutorInterface $executor

Contains the instance of an "Executor" Class which adheres to DomainActionExecutor



* Visibility: **private**


### $classNameGenerator

    private \ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface $classNameGenerator

Contains the instance of the Class that processes a ConsoleInput object, for
finding the correct name of the Class to instantiate for managing the DOMAIN and its ACTION(method)



* Visibility: **private**


Methods
-------


### __construct

    mixed ArunCore\Core\ArunCore::__construct(\ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface $classNameGenerator, \ArunCore\Interfaces\Domain\DomainActionExecutorInterface $executor)

ArunCore constructor.



* Visibility: **public**


#### Arguments
* $classNameGenerator **[ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface](ArunCore-Interfaces-Domain-DomainActionNameGeneratorInterface.md)**
* $executor **[ArunCore\Interfaces\Domain\DomainActionExecutorInterface](ArunCore-Interfaces-Domain-DomainActionExecutorInterface.md)**



### start

    void ArunCore\Interfaces\Core\ArunCoreInterface::start()





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Core\ArunCoreInterface](ArunCore-Interfaces-Core-ArunCoreInterface.md)





LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
