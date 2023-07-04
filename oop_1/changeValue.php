<?php

class Test
{
    public $name;

    public function setName($name = 'sara')
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

$object = new Test;
$object->name = 'ali';
echo $object->name;
$object->setName('yousef');
echo $object->name;
# print_r($object);