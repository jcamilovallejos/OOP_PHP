<?php

//Inheritance is the mechanism by which one or more classes can be derived from a base class.

class Collection
{
    //A protected method or property can only be accessed from within either the enclosing
    //class or from a subclass. No external code is granted access.
    protected array $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    //Public properties and methods can be accessed from any context.
    public function sum($key) : float {
        return array_sum(array_map(fn($item) => $item->$key, $this->items));
    }
}

//A class that inherits from another is said to be a subclass of it.
//This relationship is often described in terms of parents and children.
//The child class will typically add new functionality to that provided by its parent
class VideosCollection extends Collection
{
    public function length() : float {
        return $this->sum('length');
    }
}

class Video
{
    //A private method or property can only be accessed from within the enclosing class.
    //Even subclasses have no access.
    private string $title;
    public float $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }

    //Even when client programmers need to work with values held by your class, it is often a good
    //idea to deny direct access to properties, providing methods instead that relay the needed values.
    //Such methods are known as accessors or getters and setters.
    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}

$collection = new VideosCollection([
    new Video('Some Video', 100),
    new Video('Some Video', 600),
    new Video('Some Video', 3),
]);

echo $collection->length();