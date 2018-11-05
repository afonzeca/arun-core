ArunCore\Core\Helpers\LowLevelHelper
===============






* Class name: LowLevelHelper
* Namespace: ArunCore\Core\Helpers
* This class implements: [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)




Properties
----------


### $aReader

    private \Doctrine\Common\Annotations\Reader $aReader





* Visibility: **private**


Methods
-------


### __construct

    mixed ArunCore\Core\Helpers\LowLevelHelper::__construct(\Doctrine\Common\Annotations\Reader $annotationReader)

ReflectionHelpers constructor.



* Visibility: **public**


#### Arguments
* $annotationReader **Doctrine\Common\Annotations\Reader**



### numberOfMandatoryParameters

    mixed ArunCore\Interfaces\Helpers\LowLevelHelperInterface::numberOfMandatoryParameters(string $className, string $domain, string $action)

Check if the number of parameters from command line
is the same required from DOMAIN:ACTION class



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $className **string**
* $domain **string**
* $action **string**



### getReCastedParameters

    array ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getReCastedParameters(string $className, string $domain, string $action, array $realParameters)

Recast all command line parameters to the class parameters that
corresponds to DOMAIN:ACTION required from CLI



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $className **string**
* $domain **string**
* $action **string**
* $realParameters **array**



### recastParamsFromMethodDefinitions

    array ArunCore\Core\Helpers\LowLevelHelper::recastParamsFromMethodDefinitions(array<mixed,\ReflectionParameter> $methodParamsList, array $commandLineParameters)

Recast every parameters according to the Class definition



* Visibility: **private**


#### Arguments
* $methodParamsList **array&lt;mixed,\ReflectionParameter&gt;**
* $commandLineParameters **array**



### isActionEnabled

    boolean ArunCore\Interfaces\Helpers\LowLevelHelperInterface::isActionEnabled(string $domain, string $action)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $domain **string**
* $action **string**



### getEnabledActionsAnnotations

    array ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getEnabledActionsAnnotations(array $methodsList)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $methodsList **array**



### getDomainSynopsis

    string ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getDomainSynopsis(string $className)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $className **string**



### isDomainEnabled

    boolean ArunCore\Interfaces\Helpers\LowLevelHelperInterface::isDomainEnabled(string $domain)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $domain **string**



### isActionPresent

    boolean ArunCore\Interfaces\Helpers\LowLevelHelperInterface::isActionPresent(string $className, string $domain, string $action)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $className **string**
* $domain **string**
* $action **string**



### getClassPublicMethods

    mixed ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getClassPublicMethods(string $className, string $domain)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $className **string**
* $domain **string**



### getReflectionClassFromDomain

    \ReflectionClass ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getReflectionClassFromDomain(string $domain)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)


#### Arguments
* $domain **string**



### getReflectionClassFromFQDN

    \Reflector ArunCore\Core\Helpers\LowLevelHelper::getReflectionClassFromFQDN(string $domainFQDN)





* Visibility: **public**


#### Arguments
* $domainFQDN **string**



### getClassListAssociatedToDomains

    mixed ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getClassListAssociatedToDomains()

Return the file list of all domains class



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)




### getSynopsisFromDomains

    mixed ArunCore\Interfaces\Helpers\LowLevelHelperInterface::getSynopsisFromDomains()

return array $synopsis



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Helpers\LowLevelHelperInterface](ArunCore-Interfaces-Helpers-LowLevelHelperInterface.md)





LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
