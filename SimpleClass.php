<?php

/**
 * @author Rufusy Idachi <idachirufus@gmail.com>
 * @date: 6/11/2023
 * @time: 10:28 PM
 */

/**
 * To create an instance of the class, we use the new keyword, which then gives us an "instance" that we can assign to
 * a variable and generally interact with.
 *
 * Then, a new instance is created; PHP will check for a method called __construct and if it exists, it will be called.
 * The parameters passed into this method are those that are passed in when calling the class:
 * A constructor prepares an object for use.
 *
 * Inside the class, we have a variable called $this, which is available to every method inside the class and refers to the current instance.
 * It provides access to all the methods and properties of that instance:
 *
 * There are three ways that properties can be set in the class:
 * In the constructor parameters
 * Defining the property in the class body
 * Dynamically assigning the property without a definition (don't do this)
 *
 * @todo Explain access modifiers private, public, protected
 */

class SimpleClass
{
    public string $name;

    public function __construct(string $name = 'Simon'){
        $this->name = $name;
    }
}

$instance = new SimpleClass();
echo "\n" . $instance->name; // Simon
$instance2 = new SimpleClass('Sally');
echo "\n" . $instance2->name; //Sally

