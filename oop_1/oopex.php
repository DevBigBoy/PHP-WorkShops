<?php


class Contract
{
    public $employeeName;
    public $mangerName;
    public $position;
    public $salary;
    public $startDate;
    public $endDate;
    public $ensurance = true;
}

$shady = new Contract();
$shady->employeeName = 'shady';
$shady->mangerName = 'ezz';
$shady->salary = 5000;
$shady->position = 'backEnd';
$shady->startDate = "1/05/2023";
$shady->endDate = "25/05/2024";


print_r($shady);

$hadi = new Contract();
$hadi->employeeName = 'hadi';
$hadi->mangerName = 'ezz';
$hadi->salary = 5000;
$hadi->position = 'backEnd';
$hadi->startDate = "1/05/2023";
$hadi->endDate = "25/05/2024";
# $hadi->flexableHours = true; #


print_r($hadi);
