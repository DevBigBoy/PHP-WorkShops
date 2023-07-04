<?php
# 

class Employee
{
    public $name;

    function __set($name, $value)
    {
        echo "<p>Nonexistent variable : \$$name</p>";
    }

    function __get($name)
    {
        echo "<p>Nonexistent Variable: \$$name</p>";
    }
}

$employee = new Employee;
$employee->name = 'ahmed';
$employee->title = "Executive Chef";
echo $employee->age;
