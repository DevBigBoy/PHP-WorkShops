<?php
$lesson_title = "Functions";
date_default_timezone_set('Africa/Cairo');
// declare(strict_types=1);

/**
 * l => defines the day of the week
 * F => defines the Month
 * n => defines the numerical representation of the day of the month
 * Y => defines the four-digit representation of the year
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lesson_title; ?></title>
    <style>
    body {

        font-size: 1rem;
        font-family: monospace;
        background-color: darkgoldenrod;
    }
    </style>
</head>

<body>
    <h2>Invoking a Function</h2>
    <p>Five raised to the third power equals <?= pow(5,3); ?></p>
    <?php
     $value = pow(5,3);
     ?>
    <p>Five raised to the third power equals <?= $value; ?></p>

    <p><?= date("l");?> </p>

    <!-- Prints Something Like Monday 8th of August 2005 03:12:46 PM -->
    <p><?= date('l jS \of F Y h:i:s A');?></p>

    <h2>Creating a Function</h2>
    <p>function functionName()
        <br>
        {
        <br>
        &nbsp function body
        <br>
        }
    </p>

    <?php
    // create a function
        function displayDate(){
            return date('l, F n , Y');
        }
    ?>
    <p><?= displayDate(); ?></p>

    <h2>Returning Multiple Values</h2>
    <?php
    $colors = ['red','blue', 'grren'];
    list($color1, $color2, $color3) = $colors;

    function retrieveUserProfile(){

        $user[] = 'jason Gilmore';
        $user[] = 'jason@example.com';
        $user[] = 'English';    
        return $user;
    }
    list($name, $email, $language) = retrieveUserProfile();
    ?>
    <p>Name: <?= $name;?>, email: <?= $email;?>, language:<?= $language;?>
    </p>

    <h2>Passing Arguments by Value</h2>
    <p>you'll often find it useful to pass data into a function</p>

    <?php
    // let's create a function that calculates an item's total cost
        function calculateSalesTax($price, $tax){
            return $price + ($price * $tax);
        }

        // Ex.2
        /**
         * When you pass an argument in this manner, it’s called passing by value
         * This means that any changes made to those values within the scope of the function are ignored outside of the function
        */
        
        function calculateSalesTax2($price, $tax){
            return $price + ($price * $tax);
        } 
        $price = 15.00;
        $tax = 0.0675;
        $total = calculateSalesTax($price, $tax);
    ?>
    <p>Total Cost is <?= calculateSalesTax(15.00, .0675); ?></p>
    <p>unlike languages such as C++, php does not require you to define the
        function before it’s invoked because the entire script is read into the php parsing engine before execution. one
        exception is if the function is defined in an include file, the include/require statement will have to be
        executed before the function is used</p>


</body>

</html>