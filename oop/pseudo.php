<?php


class Mobile
{
    public $brand;
    public $color;

    public  function on()
    {
        # refere to current object (Who called the method)
        # bee2ol meen nadh 3lih
        echo "welcome form " . $this->brand . "<br>";
    }
}

$apple = new Mobile();
$apple->color = 'black';
$apple->brand = 'Apple';
$apple->on();


$samsung = new Mobile;
$samsung->color = 'blue';
$samsung->brand = 'Samsung';
$samsung->on();

$oppo = new Mobile;
$oppo->color = 'red';
$oppo->brand = 'oppo';
$oppo->on();
