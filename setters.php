<?php

class Person{
public $desc;


public function __construct($desc){

        $this->desc = $desc;
}



public function setAge($age){
        if ($age < 15){
                throw new Exception("person under age");
        }

        $this->age = $age;
}


}

$john = new  Person('Hohn Doe');


$john->setAge(14);

var_dump($john);

?>