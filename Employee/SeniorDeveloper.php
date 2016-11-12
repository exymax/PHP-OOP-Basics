<?php

namespace Employee;

class SeniorDeveloper extends Employee
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function buildAwesomeStuff()
    {
        echo 'Something amazing had been created by ',$this->name;
    }
}
