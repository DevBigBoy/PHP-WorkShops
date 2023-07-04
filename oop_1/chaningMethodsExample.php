<?php


class Car
{
    public $color;

    public function increaseBlack()
    {
        $this->color .= " + Black";
        return $this;
    }

    public function increaseWhite()
    {
        $this->color .= " + White";
        return $this;
    }
}

// $bmw = new Car;
// $bmw->color = 'blue';
// $bmw->increaseBlack();
// $bmw->increaseBlack();
// $bmw->increaseWhite();
// echo $bmw->color;

$bmw = new Car;
$bmw->color = 'blue';
$bmw->increaseBlack()->increaseBlack()->increaseWhite();
// echo $bmw->color;
// print_r($bmw->color);