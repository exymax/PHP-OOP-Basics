<?php

namespace Salary;

class FixedSalary extends Salary
{
    private $salary;

    public function __construct($salary)
    {
        $this->salary = $salary;
    }

    public function calculateSalary()
    {
        return $this->salary;
    }
}
