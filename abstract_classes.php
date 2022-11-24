<?php

//It can not be instanced
//You must use abstract methods in the new class
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

    abstract public function qualifier($user);
}



class FirstThousandPoints extends AchievementType
{
    public function qualifier($user)
    {
        // TODO: Implement qualifier() method.
    }
}

$firstThousandPoints = new FirstThousandPoints();
print($firstThousandPoints->name());
print($firstThousandPoints->icon());
