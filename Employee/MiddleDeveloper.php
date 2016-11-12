<?php

namespace Employee;

class MiddleDeveloper extends Employee
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function doEpicAppear()
    {
        echo 'BANG BANG BANG!',$this->name,' in the building.';
    }
}
