<?php
// variable
$name = 'mohamed';
// echo $name;

// local Variable
function showWelcome(){
    $x = 'welcome to my website';
    echo $x;
    // echo   $name; // undefined variable
}

// showWelcome();
// echo $x // error undefined variable

// Global Variable 

// function parameters
// echo gettype($name);

function addten($x){
    echo $x += 10;
}

// addten(10)

// Static Variable
function  add1(){
    static $x = 1;
    $x ++;
    echo $x;
}
// add1();
// add1();
// add1();
// add1();


// Super Global Variable
/**
 * $GLOBALS
 * $_SERVER
 * $_REQUEST
 * $_POST
 * $_GET
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
*/
// print_r($_SERVER)

// variable variable
// $name = 'ali';
// $$name = 'ali gad';
// echo $ali;

//constant
define('PI',3.14);
// echo PI;

// Expressions
$x = 6;
$y = 6; 
$z = $x + $y; // this is expression

// operands=> input like $x

// operators = >symbol like + - > < != = 

// operators precedence
/**
 * 
 * 
*/

// operator Associativity
// Arithmatic operators
/*
    **
    + 
    - 
    * 
    / 
    %
    ()
*/

// echo 'hello';
echo (17 % 3);

// assignment operators
/**
 * =
 * +=
 * -=
 * /=
 * %=
 * .= 
*/

// String Operators
/**
 * . concatination
*/

// increment / Decrement operators
/**
 * ++
 * --
*/

// logical operators
/**
 * OR ||
 * AND &&
 * NOT !
 * XOR
*/

// equality operators
/**
 * ==
 * ===
 * !=
 * !==
 * 
*/

// comparsion operators
/**
 * >
 * <
 * >=
 * <=
 * ternary operator
*/

// Bitwise operators
?>