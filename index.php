<?php

class Person
{
  public $firstName;
  public $lastName;

  public function __construct($firstName, $lastName)
  {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function fullName()
  {
    return $this->firstName . ' ' . $this->lastName;
  }
}

$person1 = new Person('John', 'Doe');

exit($person1->fullName());

// fullName($person1->firstName, $person1->lastName);

$person2 = new Person('Mary', 'Smith');

echo "{$person1->fullName()} es amigo de {$person2->fullName()}";
