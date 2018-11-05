ArunCore\Interfaces\Core\HelpGeneratorInterface
===============






* Interface name: HelpGeneratorInterface
* Namespace: ArunCore\Interfaces\Core
* This is an **interface**






Methods
-------


### makeHelpMessage

    mixed ArunCore\Interfaces\Core\HelpGeneratorInterface::makeHelpMessage(string $className, string $domain, boolean $global)

Generate the correct help for a Domain (set of aggregated commands). Help is uniq for all Action (commands)
owned by a Domain.

The classInstance parameters allows to inspect the class methods and their syntax for checking number of parameters, type,
and optional flags

* Visibility: **public**


#### Arguments
* $className **string**
* $domain **string**
* $global **boolean**




LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
