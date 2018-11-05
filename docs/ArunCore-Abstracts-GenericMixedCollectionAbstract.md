ArunCore\Abstracts\GenericMixedCollectionAbstract
===============






* Class name: GenericMixedCollectionAbstract
* Namespace: ArunCore\Abstracts
* This is an **abstract** class
* This class implements: Countable, Iterator




Properties
----------


### $elements

    private array $elements





* Visibility: **private**


Methods
-------


### valid

    boolean ArunCore\Abstracts\GenericMixedCollectionAbstract::valid()





* Visibility: **public**
* This method is **abstract**.




### __construct

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::__construct()

GenericMixedCollection constructor.



* Visibility: **public**




### init

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::init()





* Visibility: **public**




### set

    void ArunCore\Abstracts\GenericMixedCollectionAbstract::set(string $element, string $nameId)





* Visibility: **public**


#### Arguments
* $element **string**
* $nameId **string**



### get

    string ArunCore\Abstracts\GenericMixedCollectionAbstract::get(string $key)





* Visibility: **public**


#### Arguments
* $key **string**



### remove

    boolean ArunCore\Abstracts\GenericMixedCollectionAbstract::remove(string $nameId)





* Visibility: **public**


#### Arguments
* $nameId **string**



### next

    mixed|null ArunCore\Abstracts\GenericMixedCollectionAbstract::next()





* Visibility: **public**




### rewind

    mixed|null ArunCore\Abstracts\GenericMixedCollectionAbstract::rewind()





* Visibility: **public**




### isClosure

    boolean ArunCore\Abstracts\GenericMixedCollectionAbstract::isClosure($theClosure)





* Visibility: **private**


#### Arguments
* $theClosure **mixed**



### toArray

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::toArray()





* Visibility: **public**




### keys

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::keys()





* Visibility: **public**




### count

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::count()





* Visibility: **public**




### isEmpty

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::isEmpty()





* Visibility: **public**




### destroyContent

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::destroyContent()





* Visibility: **public**




### current

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::current()





* Visibility: **public**




### key

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::key()





* Visibility: **public**




### hasKey

    mixed ArunCore\Abstracts\GenericMixedCollectionAbstract::hasKey($key)





* Visibility: **public**


#### Arguments
* $key **mixed**




LICENSE
-------

The ["Arun-Core" Core Library](https://github.com/afonzeca/arun-core) for ["Arun CLI Microframework Project"](https://github.com/afonzeca/arun) and this file are Copyright 2018 by [Angelo Fonzeca](https://www.linkedin.com/in/angelo-f-1806868/)

Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with the License. You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the specific language governing permissions and limitations under the License.

You’ll have a chance to review before committing a LICENSE file to a new branch or the root of your project.
