<?php

//An abstract class cannot be instantiated. Instead, it defines (and, optionally, partially
//implements) the interface for any class that might extend it.
abstract class AchievementType{

    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();
        return trim(preg_replace('/[A-Z]/', '$0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())).'.png';
    }

    //In creating an abstract method, you ensure that an implementation will be available in all
    //concrete child classes, but you leave the details of that implementation undefined.
    abstract public function qualifier($user);
}



class FirstThousandPoints extends AchievementType
{
    //You must use abstract methods in the new class
    public function qualifier($user)
    {
        // TODO: Implement qualifier() method.
    }
}

$firstThousandPoints = new FirstThousandPoints();
print($firstThousandPoints->name());
print($firstThousandPoints->icon());
