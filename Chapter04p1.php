<h1>Functions</h1>
<?php
/**
 * ====================
 *      FUNCTIONS
 * ====================
 * Create Function
 * Invoke function 
 * Pass input to them
 * use type hinting
 * Return both single and multiple values to the caller,
 * Create and include function libraries
*/

?>

<h3>Invoking built-In Function</h3>
<?php

$value = pow(5, 3);
echo '<p> Five raised to the third power equals '.$value .'.</p>';

printf("<p>Five raised to the third power equals %d. </p>", pow(5,3))

?>

<?= "Today's date is ". date('l, F n, Y'); ?>

<h3>Creating a Function</h3>

<?php
    function sayHello(){
        return '<p>hello user!</p>';
    }

    echo sayHello();

?>

<h3>Returning Multiple Values</h3>

<?php
$colors = ['red', 'blue', 'green'];
list($color1, $color2, $color3) = $colors;

function retrieveUserProfile(){
    $user[] = 'moshazly';
    $user[] = 'mo@shazly.com';
    $user[] = 'English';
    return $user;
}

list($name, $email, $language) = retrieveUserProfile();

?>
<p>Hello <?= $name; ?>, This is your email <?= $email; ?>, Your language is <?= $language; ?>.</p>

<h3>Passing Arguments by Value</h3>
<p>you will often find it useful to pass data into a function.</p>
<?php

$price = 15.00;
$tax = .0675;
function calculateSalesTax($price, $tax){
 return $price + ($price * $tax);
}

?>

<p><?= calculateSalesTax(15.00, .0675); ?>.</p>

<h3>Using Type Declarations</h3>