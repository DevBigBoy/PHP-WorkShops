<?php

namespace Main\Utilities\Actions;

class A {
    public function __construct()
    {
        echo 'I am an instance of A class which is located in the global space';
    }
}

function sayWelcome(){
    echo '<p>hello my dear friends form gloabl space</p>';   
 }
 
?>