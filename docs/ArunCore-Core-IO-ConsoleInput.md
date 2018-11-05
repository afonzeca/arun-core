ArunCore\Core\IO\ConsoleInput
===============






* Class name: ConsoleInput
* Namespace: ArunCore\Core\IO
* This class implements: [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)




Properties
----------


### $domainName

    private string $domainName

Contains the value of the DOMAIN NAME (e.g. DOMAINNAME:*)



* Visibility: **private**


### $actionName

    private string $actionName

Contains the value of the ACTION (e.g. *:ACTION)



* Visibility: **private**


### $rawArgs

    private array $rawArgs

Contains the whole values passed from CLI



* Visibility: **private**


### $options

    private array $options

Contains only the values of parameters passed from CLI



* Visibility: **private**


### $params

    private array $params

Contains only the options (--something) of parameters passed from CLI



* Visibility: **private**


### $shortOptionsValued

    private mixed $shortOptionsValued





* Visibility: **private**


### $shortOptionsVoid

    private mixed $shortOptionsVoid





* Visibility: **private**


### $longOptionsValued

    private mixed $longOptionsValued





* Visibility: **private**


### $longOptionsVoid

    private mixed $longOptionsVoid





* Visibility: **private**


Methods
-------


### __construct

    mixed ArunCore\Core\IO\ConsoleInput::__construct(array $args)

CommandLineManager constructor.



* Visibility: **public**


#### Arguments
* $args **array** - &lt;p&gt;(the whole arguments from command line)&lt;/p&gt;



### setDomainName

    \ArunCore\Core\IO\ConsoleInput ArunCore\Core\IO\ConsoleInput::setDomainName(string $commandName)

Store DOMAIN name for further requests



* Visibility: **private**


#### Arguments
* $commandName **string**



### setActionName

    \ArunCore\Core\IO\ConsoleInput ArunCore\Core\IO\ConsoleInput::setActionName(string $actionName)

Store ACTION name for further requests



* Visibility: **private**


#### Arguments
* $actionName **string**



### setRawsArgs

    \ArunCore\Core\IO\ConsoleInput ArunCore\Core\IO\ConsoleInput::setRawsArgs(array $args)

Store the whole command line arguments (ARGV)



* Visibility: **private**


#### Arguments
* $args **array**



### getOptionByRegExpr

    array ArunCore\Core\IO\ConsoleInput::getOptionByRegExpr(string $pattern)

Get the arguments list and applies and extract data according to the regexpr passed parameter



* Visibility: **private**


#### Arguments
* $pattern **string**



### extractShortOptionsWithParams

    array ArunCore\Interfaces\IO\ConsoleInputInterface::extractShortOptionsWithParams()

Get short options with value (e.g. -u="FOO")



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)




### getShortOptionValuedOnly

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getShortOptionValuedOnly(string $key)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)


#### Arguments
* $key **string**



### extractLongOptionsWithValues

    array ArunCore\Interfaces\IO\ConsoleInputInterface::extractLongOptionsWithValues()

Get long options with value (e.g. --config="/etc/myapp/config.cfg"



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)




### getLongOptionValuedOnly

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getLongOptionValuedOnly(string $key)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)


#### Arguments
* $key **string**



### extractLongOptionsVoid

    array ArunCore\Interfaces\IO\ConsoleInputInterface::extractLongOptionsVoid()

Get long options without parameters (e.g. --print --help --check)



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)




### hasLongOptionVoid

    boolean ArunCore\Interfaces\IO\ConsoleInputInterface::hasLongOptionVoid(string $key)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)


#### Arguments
* $key **string**



### hasShortOptionVoid

    boolean ArunCore\Interfaces\IO\ConsoleInputInterface::hasShortOptionVoid(string $key)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)


#### Arguments
* $key **string**



### extractShortOptionsVoid

    array ArunCore\Interfaces\IO\ConsoleInputInterface::extractShortOptionsVoid()

Get short options without parameters like -i -t -g



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)




### analyzeAndSetParams

    mixed ArunCore\Core\IO\ConsoleInput::analyzeAndSetParams()

Store Parameters only inside $this->params property



* Visibility: **private**




### getOption

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getOption(string $key)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)


#### Arguments
* $key **string**



### hasOption

    boolean ArunCore\Interfaces\IO\ConsoleInputInterface::hasOption(string $key)





* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)


#### Arguments
* $key **string**



### getDomainActionValues

    mixed ArunCore\Core\IO\ConsoleInput::getDomainActionValues()

Extract DOMAIN:ACTION only



* Visibility: **private**




### checkArguments

    array ArunCore\Core\IO\ConsoleInput::checkArguments()

Check DOMAIN:ACTION. If no parameters
class "Default" with "help" method will run



* Visibility: **private**




### extractDomainAction

    array ArunCore\Core\IO\ConsoleInput::extractDomainAction(string $firstParam)

Extract DOMAIN:ACTION parameters. If the ACTION is not present
"default" will be called



* Visibility: **protected**


#### Arguments
* $firstParam **string**



### getDomainName

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getDomainName()

Get the name of the DOMAIN required



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)




### getActionName

    string ArunCore\Interfaces\IO\ConsoleInputInterface::getActionName()

Get the name of action required



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)




### getParams

    array ArunCore\Interfaces\IO\ConsoleInputInterface::getParams()

Get the list of command line parameters only (e.g. executable, DOMAIN:ACTION, options excluded)



* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)




### getRawArgs

    array ArunCore\Interfaces\IO\ConsoleInputInterface::getRawArgs(boolean $filtered)

Get the whole list of the arguments passed from command line (executable, DOMAIN:ACTION, parameters, options).

If filtered, executable name and ACTION:DOMAIN are escluded form list

* Visibility: **public**
* This method is defined by [ArunCore\Interfaces\IO\ConsoleInputInterface](ArunCore-Interfaces-IO-ConsoleInputInterface.md)


#### Arguments
* $filtered **boolean**



### initializeOtherValues

    \ArunCore\Interfaces\IO\ConsoleInputInterface ArunCore\Core\IO\ConsoleInput::initializeOtherValues()

Set default values to empty for properties before processing command line



* Visibility: **protected**




### makeArrayFromOptionsAndValues

    array ArunCore\Core\IO\ConsoleInput::makeArrayFromOptionsAndValues(array $source, array $destination)

Separate Options and Values and store them into an array as KEY=>VALUE
E.g. --c='/etc/Arun/config.cfg" will be converted in

$storeVariable["c"] = '/etc/Arun/config.cfg'

* Visibility: **private**


#### Arguments
* $source **array**
* $destination **array**



### makeArrayFromOptionsWithVoidValues

    array ArunCore\Core\IO\ConsoleInput::makeArrayFromOptionsWithVoidValues(array $source, array $destination)

Generates an array with key from array and a default value (usually "")
E.g. --i be converted in

$dest["i"] = ""

* Visibility: **private**


#### Arguments
* $source **array**
* $destination **array**



### process

    mixed ArunCore\Core\IO\ConsoleInput::process()

Process the command line and set the environment



* Visibility: **protected**




### extractCommandLineParamsWithoutOptions

    array ArunCore\Core\IO\ConsoleInput::extractCommandLineParamsWithoutOptions()





* Visibility: **private**





LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
