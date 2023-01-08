<?php
/*
* DataTypes
*/
// Scalar Data Types
// integer, float, string, boolean

// Compound Data Types
// array, object

// integer
// Decimal, Binary, Octal, Hexadecimal
// $number = -10;
// echo "Number of students in our class is {$number}";


// float | double, Real

$number = -102.5;
$number = 1e3;
// echo PHP_INT_MAX;
// echo PHP_INT_SIZE;
// echo $number;

// String
$welcome = "<H2>Welcome to my website</h2>";
// echo $welcome;

// Boolean
// TRUE, FALSE
// $status = True;
// echo $status;

// Array
$friends = array('ahmed', 'khaled', 'tarek', 'eslam','Ziad');
// echo $friends[0];

// Object

class Employer 
{
    public $name;    
    public $age;    
    public $salary;    

    public function showsalary()
    {
        echo $this->salary;
    }
}

$emp1 = new Employer();
$emp1->name = 'ali';
// echo $emp1->name;

// Coverting data type using type casting
/*
 (array) 
 (real) (float) (double)
 (int) (integer)
 (string)
 (object)
 (bool) (boolean)
*/

$x = (bool) 8;
// print_r($x)

// type-related functions
// gettype
// settype

$result = gettype($x);
// echo $result;

$s = 4;
$y = settype($s,'array');
$result = gettype($y);
echo $result;

/*

    is_array()
    is_name()
*/ 

$num ='ali';
$num1 =3;
echo 'the variable $num is interger =>' . is_int($num);

echo '<br>the variable $num1 is interger =>' . is_int($num1)
?>