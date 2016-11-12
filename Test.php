<?php

require_once 'autoload.php';

use Employee\Designer;
use Employee\FrontendDeveloper;
use Employee\MiddleDeveloper;
use Employee\SeniorDeveloper;
use Salary\FixedSalary;
use Salary\HourlyBasedSalary;

$team = new Team('X');
$team->addEmployee(new Designer('Anna'), new FixedSalary(3000))
     ->addEmployee(new SeniorDeveloper('Josh'), new HourlyBasedSalary(60, 10))
     ->addEmployee(new MiddleDeveloper('Adriana'), new FixedSalary(1000))
     ->addEmployee(new MiddleDeveloper('Alex'), new FixedSalary(1000))
     ->addEmployee(new FrontendDeveloper('Ryan'), new HourlyBasedSalary(120, 5));

echo '<h1>You should spend ',$team->calculateSalary(),' to work with this guys.</h1>';
