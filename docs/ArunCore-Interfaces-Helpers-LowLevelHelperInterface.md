ArunCore\Interfaces\Helpers\LowLevelHelperInterface
===============






* Interface name: LowLevelHelperInterface
* Namespace: ArunCore\Interfaces\Helpers
* This is an **interface**






Methods
-------


### numberOfMandatoryParameters

    mixed ArunCore\Interfaces\Helpers\LowLevelHelperInterface::numberOfMandatoryParameters(string $className, string $domain, string $action)

Check if the number of parameters from command line
is the same required from DOMAIN:ACTION class



* Visibility: **public**


#### Arguments
* $className **string**
* $domain **string**
* $action **string**



### getReCastedParameters

    array ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getReCastedParameters(string $className, string $domain, string $action, array $realParameters)

Recast all command line parameters to the class parameters that
corresponds to DOMAIN:ACTION required from CLI



* Visibility: **public**


#### Arguments
* $className **string**
* $domain **string**
* $action **string**
* $realParameters **array**



### getEnabledActionsAnnotations

    array ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getEnabledActionsAnnotations(array $methodsList)





* Visibility: **public**


#### Arguments
* $methodsList **array**



### getDomainSynopsis

    string ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getDomainSynopsis(string $className)





* Visibility: **public**


#### Arguments
* $className **string**



### isDomainEnabled

    boolean ArunCore\Interfaces\Helpers\LowLevelHelperInterface::isDomainEnabled(string $domain)





* Visibility: **public**


#### Arguments
* $domain **string**



### isActionEnabled

    boolean ArunCore\Interfaces\Helpers\LowLevelHelperInterface::isActionEnabled(string $domain, string $action)





* Visibility: **public**


#### Arguments
* $domain **string**
* $action **string**



### getClassPublicMethods

    mixed ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getClassPublicMethods(string $className, string $domain)





* Visibility: **public**


#### Arguments
* $className **string**
* $domain **string**



### getReflectionClassFromDomain

    \ReflectionClass ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getReflectionClassFromDomain(string $domain)





* Visibility: **public**


#### Arguments
* $domain **string**



### isActionPresent

    boolean ArunCore\Interfaces\Helpers\LowLevelHelperInterface::isActionPresent(string $className, string $domain, string $action)





* Visibility: **public**


#### Arguments
* $className **string**
* $domain **string**
* $action **string**



### getClassListAssociatedToDomains

    mixed ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getClassListAssociatedToDomains()

Return the file list of all domains class



* Visibility: **public**




### getSynopsisFromDomains

    mixed ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getSynopsisFromDomains()

return array $synopsis



* Visibility: **public**





LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
