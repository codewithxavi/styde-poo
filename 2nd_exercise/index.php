<?php

class Person
{
    protected $firstName;
    protected $lastName;
    protected $nickName;
    protected $changeNickName = 0;
    protected $birthDay;

    public function __construct($firstName, $lastName, $birthDay)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        //$this->nickName = $nickName;
        $this->birthDay = $birthDay;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setNickName($nickName)
    {
        $this->changeNickName();
        $this->strNickaName($nickName);
        $this->nickNameDistingNameLastName($nickName);
        $this->nickName = $nickName;
    }

    protected function changeNickName()
    {
        if ($this->changeNickName >= 2) {
            throw new Exception("You can't change a nickname more than 2 times");
        }
        $this->changeNickName++;
    }

    protected function strNickaName($nickName)
    {
        if (strlen($nickName) < 2) {
            throw new Exception("El nickname debe tener por lo menos 2 caracteres");
        }
    }

    protected function nickNameDistingNameLastName($nickName)
    {
        if ($nickName == $this->firstName || $nickName == $this->lastName) {
            throw new Exception("El nickname no puede ser igual al firstName o lastName");
        }
    }

    public function getNickName()
    {
        return strtolower($this->nickName);
    }

    public function getBirthDay()
    {
        return $this->birthDay;
    }

    public function getAge()
    {
        $birthDay = new Datetime($this->birthDay);
        $toDay = new Datetime();
        $age = $toDay->diff($birthDay);
        return $age->y;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Lucas', 'Guardón', '05-08-1987');

$person1->setNickName('el_negro');
$person1->setNickName('lala');
echo($person1->getNickName());
//$person1->setNickName('hola');

echo $person1->getAge();
