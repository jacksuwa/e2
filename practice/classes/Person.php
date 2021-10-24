<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->firstName = $firstName;
        $this->lasttName = $lastName;
        $this->age = $age;
    }

    public function getFullName()
    {
        return   $this->firstName . ' ' . $this->lasttName;
    }

    public function getClassification()
    {
        // if ($this->age >= 18) {
        //     return 'adult';
        // } else {
        //     return 'minor';
        // }
        return ($this->age >= 18) ? 'adult' : 'minor';
    }
}