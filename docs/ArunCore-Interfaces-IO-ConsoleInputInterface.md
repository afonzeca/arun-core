ArunCore\Interfaces\IO\ConsoleInputInterface
===============






* Interface name: ConsoleInputInterface
* Namespace: ArunCore\Interfaces\IO
* This is an **interface**






Methods
-------


### extractShortOptionsWithParams

    array ArunCore\Interfaces\IO\ConsoleInputInterface::extractShortOptionsWithParams()

Get short options with value (e.g. -u="FOO")



* Visibility: **public**




### getShortOptionValuedOnly

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getShortOptionValuedOnly(string $key)





* Visibility: **public**


#### Arguments
* $key **string**



### extractLongOptionsWithValues

    array ArunCore\Interfaces\IO\ConsoleInputInterface::extractLongOptionsWithValues()

Get long options with value (e.g. --config="/etc/myapp/config.cfg"



* Visibility: **public**




### getLongOptionValuedOnly

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getLongOptionValuedOnly(string $key)





* Visibility: **public**


#### Arguments
* $key **string**



### extractLongOptionsVoid

    array ArunCore\Interfaces\IO\ConsoleInputInterface::extractLongOptionsVoid()

Get long options without parameters (e.g. --print --help --check)



* Visibility: **public**




### hasLongOptionVoid

    boolean ArunCore\Interfaces\IO\ConsoleInputInterface::hasLongOptionVoid(string $key)





* Visibility: **public**


#### Arguments
* $key **string**



### hasShortOptionVoid

    boolean ArunCore\Interfaces\IO\ConsoleInputInterface::hasShortOptionVoid(string $key)





* Visibility: **public**


#### Arguments
* $key **string**



### hasOption

    boolean ArunCore\Interfaces\IO\ConsoleInputInterface::hasOption(string $key)





* Visibility: **public**


#### Arguments
* $key **string**



### extractShortOptionsVoid

    array ArunCore\Interfaces\IO\ConsoleInputInterface::extractShortOptionsVoid()

Get short options without parameters like -i -t -g



* Visibility: **public**




### getDomainName

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getDomainName()

Get the name of the DOMAIN required



* Visibility: **public**




### getActionName

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getActionName()

Get the name of action required



* Visibility: **public**




### getParams

    array ArunCore\Interfaces\IO\ConsoleInputInterface::getParams()

Get the list of command line parameters only (e.g. executable, DOMAIN:ACTION, options excluded)



* Visibility: **public**




### getRawArgs

    array ArunCore\Interfaces\IO\ConsoleInputInterface::getRawArgs(boolean $filtered)

Get the whole list of the arguments passed from command line (executable, DOMAIN:ACTION, parameters, options).

If filtered, executable name and ACTION:DOMAIN are escluded form list

* Visibility: **public**


#### Arguments
* $filtered **boolean**



### getOption

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getOption(string $key)





* Visibility: **public**


#### Arguments
* $key **string**




LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
