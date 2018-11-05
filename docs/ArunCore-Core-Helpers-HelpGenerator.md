ArunCore\Core\Helpers\HelpGenerator
===============






* Class name: HelpGenerator
* Namespace: ArunCore\Core\Helpers
* This class implements: [ArunCore\Interfaces\Core\HelpGeneratorInterface](ArunCore-Interfaces-Core-HelpGeneratorInterface.md)




Properties
----------


### $cOut

    private \ArunCore\Interfaces\IO\ConsoleOutputInterface $cOut





* Visibility: **private**


### $lHelper

    private \ArunCore\Interfaces\Helpers\LowLevelHelperInterface $lHelper





* Visibility: **private**


Methods
-------


### __construct

    mixed ArunCore\Core\Helpers\HelpGenerator::__construct(\ArunCore\Interfaces\Helpers\LowLevelHelperInterface $lHelper, \ArunCore\Interfaces\IO\ConsoleOutputInterface $cOut)

HelpGenerator constructor.



* Visibility: **public**


#### Arguments
* $lHelper **[ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)**
* $cOut **[ArunCore\Interfaces\IO\ConsoleOutputInterface](ArunCore-Interfaces-IO-ConsoleOutputInterface.md)**



### makeHelpMessage

    mixed ArunCore\Interfaces\Core\HelpGeneratorInterface::makeHelpMessage(string $className, string $domain, boolean $global)

Generate the correct help for a Domain (set of aggregated commands). Help is uniq for all Action (commands)
owned by a Domain.

The classInstance parameters allows to inspect the class methods and their syntax for checking number of parameters, type,
and optional flags

* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Core\HelpGeneratorInterface](ArunCore-Interfaces-Core-HelpGeneratorInterface.md)


#### Arguments
* $className **string**
* $domain **string**
* $global **boolean**



### printParameterSyntax

    boolean ArunCore\Core\Helpers\HelpGenerator::printParameterSyntax(array<mixed,\Reflector> $parameters)

Thanks to reflection, the method analyzes every method (action) from the class(domain)
and describe them according to parameter characteristic (e.g. type hint and if it is optional)



* Visibility: **private**


#### Arguments
* $parameters **array&lt;mixed,\Reflector&gt;**



### helpMessageHeader

    mixed ArunCore\Core\Helpers\HelpGenerator::helpMessageHeader(string $domain, string $helpMessage)





* Visibility: **private**


#### Arguments
* $domain **string**
* $helpMessage **string**



### helpMessageBody

    mixed ArunCore\Core\Helpers\HelpGenerator::helpMessageBody(string $domain, array $actions)

This method uses the ConsoleOutput for producing the help file on the screen for a specific domain



* Visibility: **private**


#### Arguments
* $domain **string**
* $actions **array**



### helpMessageGlobalBody

    mixed ArunCore\Core\Helpers\HelpGenerator::helpMessageGlobalBody(array $help)

This method users the ConsoleOutput for producing the help file on the screen for all the domains (global help)



* Visibility: **private**


#### Arguments
* $help **array**




LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
