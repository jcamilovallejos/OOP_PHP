<?php

//Object is data that has been structured according to the template defined in a class
//An object said to be an instance of its class.
//Every object that is created in a PHP script is also given its own identifier (unique of the life of the object)

class Team
{
    //Property is member variable, holds data that can vary from object to object
    //We must precede our declaration and assignment with a visibility keyword
    //This can be public protected and private, and it determines the scope which the property can be accessed
    //We can declare properties dynamically. But it is not consider good practice in OOP
    //Properties allow you object to store data
    protected $name;
    protected $members = [];

    //Any arguments supplied are passed to the constructor.
    //The constructor method uses the pseudo-variable $this to assign values to each of the object’s properties.
    public function __construct($name, $members = []){
        $this->name = $name;
        $this->members = $members;
    }

    //Provide a nice readable way to create a new object
    public static function start(...$params){
        return new static(...$params);
    }

    //Methods allow your objects to perform tasks.
    //Like properties, methods can be declared public, protected or private
    //If you omit the visibility keyword in your method declaration,
    //The method will be declared public implicitly
    public function name(){
        return $this->name;
    }

    public function members(){
        return $this->members;
    }

    public function add($name){
        $this->members[] = $name;
    }

    public function cancel(){

    }

    public function manager(){

    }

}

//Only for the practice. It is not recommended
class Member
{
    protected $name;
    //A constructor method is invoked when an object is created. You can use it to set things up,
    //ensuring that essential properties are set, and any necessary preliminary work is completed.
    public function __construct($name){
        //The $this pseudo-variable is the mechanism by which a class can refer to an object instance.
        $this->name = $name;
    }
}

//=============================================================
/*$acme = new Team('Acme');
$acme->add('Jhon Doe');
$acme->add('Juan Vallejos');
var_dump($acme->members());
$acme->add('Pedro');
var_dump($acme->members());*/
//=============================================================
/*$acme = new Team('Acme', ['Juan','Pedro', 'Carlos']);
$acme->add('Pedro');
var_dump($acme->members());*/
//=============================================================
/*$acme = Team::start('Acme', ['Juan','Pedro', 'Carlos']);
$acme->add('Pedro');
var_dump($acme->members());*/

//Once again, we gather functionality into the class, saving effort and duplication in the
//code that uses it. The __construct() method is invoked when an object is created using the
//new operator.
/*$acme = new Team('Acme', ['Juan','Pedro', 'Carlos']);
$acme->add('Pedro');
var_dump($acme->members());*/
//Another way to create an object
$acme = Team::start('Acme', [
    new Member('John Doe'),
    new Member('Pedro Doe'),
]);

//We can access property variables on an object-by-object basis using the characters '->' in
//conjunction with an object variable and property name, like this:
var_dump($acme->members());

//You will invoke a method using an object variable in conjunction with -> and the method name.
//You must use parentheses in your method call as you would if you were calling a function
$acme->add('Pedro');
var_dump($acme->members());