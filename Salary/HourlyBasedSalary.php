<?php

namespace Salary;

class HourlyBasedSalary extends Salary
{
    private $workHours;
    private $rate;

    public function __construct($workHours, $rate)
    {
        $this->workHours = $workHours;
        $this->rate = $rate;
    }

    public function calculateSalary()
    {
        return $this->rate * $this->workHours;
    }
}
