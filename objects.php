<?php

//Object is data that has been structured according to the template defined in a class
//An object said to be an instance of its class.
//Every object that is created in a PHP script is also given its own identifier (unique of the life of the object)

class Team
{
    //Property us a member variable, holds data that can vary from object to object
    //We must precede our declaration and assignment with a visibility keyword
    //This can be public protected and private, and it determines the scope which the property can be accessed
    protected $name;
    protected $members = [];

    public function __construct($name, $members = []){
        $this->name = $name;
        $this->members = $members;
    }

//  Provide a nice readable way to create a new object
    public static function start(...$params){
        return new static(...$params);
    }

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

    public function __construct($name){
        $this->name = $name;
    }
}

/*$acme = new Team('Acme');
$acme->add('Jhon Doe');
$acme->add('Juan Vallejos');
var_dump($acme->members());
$acme->add('Pedro');
var_dump($acme->members());*/

/*$acme = new Team('Acme', ['Juan','Pedro', 'Carlos']);
$acme->add('Pedro');
var_dump($acme->members());*/

/*$acme = Team::start('Acme', ['Juan','Pedro', 'Carlos']);
$acme->add('Pedro');
var_dump($acme->members());*/

$acme = Team::start('Acme', [
    new Member('John Doe'),
    new Member('Pedro Doe'),
]);
var_dump($acme->members());