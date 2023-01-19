<?php

/**
 * 1- What are namespaces and why to use them
 *      - definition
 *      - problem solving
 * 2- Affected types by namespaces are traits, classes, interface, functions and constants
 * 3- Defining namespaces using the namespace keyword
 * 4- Defining sub-namespaces
 * 5- Defining multiple namespaces in the same file
 * 6- Combining global non-namespaced code with namespaced code
 * 7- Understanding how namespace are interpreted
 * 8- Accessing global functions, classes.. etc
 * 9- Namespace and Dynamic language feature 
 * 
*/

namespace Main\Utilities;

// const MY_CONSTANT = 3;

// class DataTime {

//     public function sayWelcome(){
//         echo 'hello there!';
//     }  
//     public static function stayawake(){
//         echo 'Stay Awake';
//     }  
// }

// function strtolower(){
//     echo 'I am a function';
// }

include 'autoExists.php';

class A {
    

    public function __construct()
    {   
        echo ' I am an instance of class A inside the namespace main';
        
    }
}

function sayWelcome(){
   echo '<p>hello my dear friends</p>';   
}

$a = new A;
sayWelcome();

$a = new \Main\Utilities\A;
\Main\Utilities\sayWelcome();


$b= new \Main\Utilities\Actions\A;
\Main\Utilities\Actions\sayWelcome();
Actions\sayWelcome()
?>