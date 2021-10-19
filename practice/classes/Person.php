<?php

class Person
{

    public string $firstName;
    public string $lastName;
    public int $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lasttName = $lastName;
        $this->age = $age;
    }

    function getFullName()
    {
        return   $this->firstName . ' ' . $this->lasttName;
    }

    function  getClaassification()
    {
        if ($this->age >= 18) {
            echo 'adult';
        } else {
            echo 'minor';
        }
    }
}