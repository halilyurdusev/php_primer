<?php

class nameGiver{
    private $age;
    public function __construct($age)
    {
        $this->age = $age;
    }
    function getName($name)
    {
        return "my name is " . $name . " and age is " . $this->age;
    }
}

 
?>