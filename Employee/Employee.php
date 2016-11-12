<?php

namespace Employee;

use Salary\Salary;

abstract class Employee
{
    protected $name;
    public $salaryStrategy;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setSalaryStrategy(Salary $salary)
    {
        $this->salaryStrategy = $salary;
    }
}
