<?php

namespace Employee;

class FrontendDeveloper extends Employee
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function buildAwesomeFrontend()
    {
        echo $this->name,' just started to use Angular2, but Angular3 is already announced...';
    }
}
