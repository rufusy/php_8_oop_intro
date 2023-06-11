<?php
/**
 * @author Rufusy Idachi <idachirufus@gmail.com>
 * @date: 6/11/2023
 * @time: 9:46 PM
 */

/**
 * PHP 8 OOP
 * Object-Oriented Programming (OOP) is a fundamental feature of modern PHP
 *
 * Unpacking the phrase "OOP"
 *
 * Programming
 * Hopefully, you already have a good idea of what we mean by programming. PHP is a programming language and by that we
 * mean simply that it is a set of coding words, symbols, and phrases that you can use to create code that ultimately
 * does something.
 *
 * Oriented
 * Means "showing the direction in which something is aimed, directed towards or interested in something."
 * So, we're programming in a way that is directed toward or interested in something.
 * The "something" we are interested in is objects. In OOP, we use classes and objects for everything.
 *
 * Object
 * What is an object? Well, in PHP, an object is an "instance" of a "class." "An occurrence of class"
 *
 * Here is the simplest class in PHP
 * class Foo {}
 *
 * To create an object, we use the word new and can then optionally assign the result of this call to a variable. We now have an object:
 * $foo = new Foo();
 *
 * When we are talking about OOP, what we really mean is that we will compose our program entirely using objects.
 * There must always be some code that resides at the global scope, but in an OOP program, this code is very limited indeed
 * and is simply used to bootstrap and initialize the OOP code.
 *
 * For example, this is the index.php file that all web requests are directed to when looking for a page in a Yii2 project:
 *
 * web/index.php
 *
 * defined('YII_DEBUG') or define('YII_DEBUG', true);
 * defined('YII_ENV') or define('YII_ENV', 'dev');
 * require __DIR__ . '/../vendor/autoload.php';
 * require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
 * $config = require __DIR__ . '/../config/web.php';
 * (new yii\web\Application($config))->run();
 *
 * The file procedurally represents an entire application , and the entire application's code is encapsulated in the class
 * instantiated in this file, and the classes it is composed of.
 *
 * OOP alternatives
 *
 * Procedural programming
 * Procedural code works like a long list of instructions. You start at the top and continue reading till you hit the bottom.
 *
 * Functional programming
 * as its name implies, predominantly uses functions as the building blocks of code. In functional programming, we try to use "pure functions."
 * Pure functions are those functions that, when given specific values as inputs, will do the following things:
 * 1. Always return the same value
 * 2. Always return the same value
 *
 * Learning object-oriented PHP
 * The easiest way to get your head around OOP in PHP is to work with an existing open source project or framework that is
 * written in the OOP style. There are many to choose from, though the quality can vary.
 *
 * Frameworks
 * All modern PHP frameworks that I am aware of adopt the Model, View, Controller (MVC) structure
 * In a nutshell, this means that all requests are directed to a single "front controller," which then handles deciding
 * exactly what the request is asking for and then routing that to the correct Controller.
 *
 * What that means is that there is a single publicly accessible index.php file as the only public PHP file in the public folder.
 * The Controller's job is to utilize the Model to retrieve any data required and perform any required processing before
 * finally utilizing the View to return a string of text to be rendered as HTML. We'll cover this in depth later.
 *
 * PHP OOP basics
 * Classes
 * The basic building block of PHP OOP is the class. "A blueprint of an object"
 * As briefly mentioned earlier, classes are the things that get instantiated in the "objects" that OOP talks about.
 *
 * @see SimpleClass
 *
 * Interfaces
 * These are pieces of code that never contain any functionality, but what they do define are the… well… interface
 * that classes must provide when they implement the specific interface. "A contract between classes"
 *
 * @see interface
 * @todo create interface example
 *
 * Encapsulation and visibility
 * PHP classes "encapsulate data and functionality." The word "encapsulate" simply means "enclose in a capsule."
 * What this means is that the things inside the capsule, in our case the class, are hidden away.
 * By hiding things away inside our class, we allow ourselves the freedom to change and refactor the internal workings of
 * the class without any fear of issues outside the class – as long as the public methods and properties remain the same.
 * What this means is that the general wisdom is that you should keep as much as possible hidden away and only expose the
 * minimum amount of functionality and data in order to maximize your freedom to refactor.
 *
 * Below are three levels of visibility
 * Private, protected, and public
 * By default, class properties and methods are public. This means that they are freely accessible for reading/writing/calling
 * from inside and outside the class. This is very, very rarely the way you want it. Instead, we want to only expose the things that we really want to share.
 * By setting class properties and methods to private, we prevent any outside access at all.
 * I would suggest this should be your default accessibility with all class members. Make everything private. If you want
 * to allow people to read your properties, you can either define getter methods
 *
 * What is a getter?
 * Quite simply, a getter is a method that "gets" a property. For mutable objects, you will often set a corresponding setter as well:
 * getSomething():string
 * setSomething(string $something)
 *
 * Inheritance
 * Describes the way that PHP allows us to create formal and hierarchical graphs of related objects with a single-parent, multiple-child structure.
 * Inheritance in OOP refers to the fact that a class can inherit properties and methods from a parent class.
 * The inheritance model in PHP is based on single inheritance. This means that a class can only have a single parent.
 * Parent classes may have an unlimited number of child classes.
 * PHP does support multiple inheritance with interfaces. A single interface can extend multiple parent interfaces.
 * A class can also implement multiple interfaces.
 *
 * @see inheritance
 */