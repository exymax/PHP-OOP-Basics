<?php

use Employee\Employee;
use Salary\Salary;
use Salary\SalaryInterface;

class Team implements SalaryInterface
{
    private $employees = [];
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addEmployee(Employee $employee, Salary $salary)
    {
        $employee->setSalaryStrategy($salary);
        $this->employees[] = $employee;

        return $this;
    }

    public function calculateSalary()
    {
        $resultSalary = 0;
        foreach ($this->employees as $employee) {
            $resultSalary += $employee->salaryStrategy->calculateSalary();
        }

        return $resultSalary;
    }
}
