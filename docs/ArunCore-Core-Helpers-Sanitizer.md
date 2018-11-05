ArunCore\Core\Helpers\Sanitizer
===============






* Class name: Sanitizer
* Namespace: ArunCore\Core\Helpers
* This class implements: [ArunCore\Interfaces\Security\SanitizerInterface](ArunCore-Interfaces-Security-SanitizerInterface.md)


Constants
----------


### badChars

    const badChars = "$%&/\\[]{}=;.'\""







Methods
-------


### stripBadCharsFromArray

    array ArunCore\Interfaces\Security\SanitizerInterface::stripBadCharsFromArray(array $parameters, array $optionalChars)

Strip unauthorized chars from array



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Security\SanitizerInterface](ArunCore-Interfaces-Security-SanitizerInterface.md)


#### Arguments
* $parameters **array**
* $optionalChars **array**



### stripBadChars

    string ArunCore\Interfaces\Security\SanitizerInterface::stripBadChars(string $parameter, array $optionalChars)

Strip unauthorized chars from string



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Security\SanitizerInterface](ArunCore-Interfaces-Security-SanitizerInterface.md)


#### Arguments
* $parameter **string** - &lt;p&gt;[]&lt;/p&gt;
* $optionalChars **array**



### isClassNameValid

    boolean ArunCore\Interfaces\Security\SanitizerInterface::isClassNameValid(string $className)

Check CLASS name (according to the definition from PHP Manual)



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Security\SanitizerInterface](ArunCore-Interfaces-Security-SanitizerInterface.md)


#### Arguments
* $className **string**



### isFilenameValid

    boolean ArunCore\Interfaces\Security\SanitizerInterface::isFilenameValid(string $parameter)

Check correct filename



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\Security\SanitizerInterface](ArunCore-Interfaces-Security-SanitizerInterface.md)


#### Arguments
* $parameter **string**




LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
