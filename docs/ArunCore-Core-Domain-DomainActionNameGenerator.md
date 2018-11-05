ArunCore\Core\Domain\DomainActionNameGenerator
===============






* Class name: DomainActionNameGenerator
* Namespace: ArunCore\Core\Domain
* This class implements: [ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface](ArunCore-Interfaces-Domain-DomainActionNameGeneratorInterface.md)




Properties
----------


### $consoleInput

    private \ArunCore\Interfaces\IO\ConsoleInputInterface $consoleInput

Used for storing the object which contains parsed parameters from CommandLine



* Visibility: **private**


Methods
-------


### __construct

    mixed ArunCore\Core\Domain\DomainActionNameGenerator::__construct(\ArunCore\Interfaces\IO\ConsoleInputInterface $ConsoleInput)





* Visibility: **public**


#### Arguments
* $ConsoleInput **[ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)**



### getClassAndMethodNamesForCalling

    array ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface::getClassAndMethodNamesForCalling()

Generate the NAMESPACE CLASSNAME AND ACTION for calling



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface](ArunCore-Interfaces-Domain-DomainActionNameGeneratorInterface.md)




### getFQDNClass

    string ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface::getFQDNClass(string $domain)





* Visibility: **public**
* This method is **static**.
* This method is defined by [ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface](ArunCore-Interfaces-Domain-DomainActionNameGeneratorInterface.md)


#### Arguments
* $domain **string**



### extractDomainNameFromClassName

    string ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface::extractDomainNameFromClassName(string $class)





* Visibility: **public**
* This method is **static**.
* This method is defined by [ArunCore\Interfaces\Domain\DomainActionNameGeneratorInterface](ArunCore-Interfaces-Domain-DomainActionNameGeneratorInterface.md)


#### Arguments
* $class **string**




LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
