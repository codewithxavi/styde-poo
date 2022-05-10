<?php

class Person {
    public $firstName; // public, protected <-> private
    public $lastName;

    public function __construct($firstName, $lastName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName(){
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Xavi', 'Adrian');

if ($person1->firstName = 'Xaviii'){

}

$person1->save();

echo $person1->fullName();