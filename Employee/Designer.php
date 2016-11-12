<?php

namespace Employee;

class Designer extends Employee
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function buyStarbucksCoffee()
    {
        echo 'Double espresso with chocolate for ',$this->name;
    }
}
