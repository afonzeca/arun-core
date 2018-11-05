ArunCore\Abstracts\BaseDomainCommand
===============






* Class name: BaseDomainCommand
* Namespace: ArunCore\Abstracts
* This is an **abstract** class
* This class implements: [ArunCore\Interfaces\Domain\DomainInterface](ArunCore-Interfaces-Domain-DomainInterface.md)




Properties
----------


### $cIn

    public \ArunCore\Interfaces\IO\ConsoleInputInterface $cIn





* Visibility: **public**


### $cOut

    public \ArunCore\Interfaces\IO\ConsoleOutputInterface $cOut





* Visibility: **public**


### $helpGen

    public \ArunCore\Interfaces\Core\HelpGeneratorInterface $helpGen





* Visibility: **public**


### $basePath

    protected string $basePath

Contains the BasePath of the application (where the runner is started)



* Visibility: **protected**


### $commandName

    protected string $commandName

The name of the Domain



* Visibility: **protected**


Methods
-------


### hasOption

    boolean ArunCore\Abstracts\BaseDomainCommand::hasOption(string $optionName)

Check if an option (-i, --info, etc. is present)



* Visibility: **public**


#### Arguments
* $optionName **string**



### getOptionValue

    boolean|mixed ArunCore\Abstracts\BaseDomainCommand::getOptionValue(string $optionName)

Check if an option is present and return its value (-i, --info=something, etc.)



* Visibility: **public**


#### Arguments
* $optionName **string**



### help

    mixed ArunCore\Interfaces\Domain\DomainInterface::help()





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Domain\DomainInterface](ArunCore-Interfaces-Domain-DomainInterface.md)





LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.


