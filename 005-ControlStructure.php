<?php
// Control Structures


// Conditional statment
// if statement
// check is the user is loggedin or not

$IsLoggedIn = 'Yes';
if  ($IsLoggedIn === 'Yes') {
    echo 'Welcome to our website';
}

$IsLoggedIn = 'No';
if  ($IsLoggedIn === 'Yes') {
    echo '<p>Welcome to our website</p>';
}

echo "<br>";

$IsLoggedIn = true;
if  ($IsLoggedIn) {
    echo '<p>Welcome to our website boolean type<p>';
    echo '<h3>You are late</h3>';
}

$IsLoggedIn = false;
if  ($IsLoggedIn) {
    echo 'Welcome to our website';
}


// check if the player is less than 32 years
$playerAge = 30; // evaluate true
if ($playerAge < 32) {
    echo '<p>the player can still play in our team</p>';
}

$playerAge = 32; // evaluate false
if ($playerAge < 32) {
    echo '<p>the player can still play in our team</p>';
}


// check if the employee have a certificate in php 
// 5+ years of experience
// both conditions must be true
$experience = 5;
$cert = True;

if ($experience >= 5 && $cert === true) {
    echo '<h2>you hired</h2>';
}

// What if he isn't qualified for the job?
$experience = 4;
$cert = True;

// else statement
if ($experience >= 5 && $cert === true) {
    echo '<h2>you hired</h2>';
} else {
    echo '<h2>sorry. you aren\'t qualified for the job</h2>';
}

// exception 
// If the employee creates +15 projects he is accepted
$experience = 4;
$cert = True;
$projects = 15;

if (($experience >= 5 && $cert === true) || $projects >= 15) {
    echo '<h2> exception you hired</h2>';
}

// elseif statement
// 100-200 => 100- 199
// 200-300 => 200 -299
// + 300

$points = 99;
if ($points >= 100 && $points < 200){
    echo '<p> you are a newbi</p>';
} elseif ($points >= 200 && $points < 300){
    echo '<p> you are a gaint</p>';
} elseif ($points >= 300){
    echo '<p> you are an expert</p>';
} else {
    echo '<p>sorry, you need to collect more points </p>';
}


// switch
/**
 * if the car speed is 100, 200 L.E
 * if the car speed is 200, 1000 L.E
 * if the car speed is 250, Go To jail
*/

$carSpeed = 100;

switch ($carSpeed) {
    case 100:
        echo '<p>You will pay 100 L.E</p>';
        break;
    case 200:
        echo '<p>You will pay 1000 L.E</p>';
        break;
    case 250:
        echo '<p>You will go to jail</p>';   
        break;
}

/**
 * ============================
 *         loops
 * ============================
 * components:
 * initializer
 * condition
 * incremenr || decrement
 * EX:
 *      While
 *      do-while
 *      for
 *      foreach
*/

// $playerAge = 16;

// while($playerAge <= 32){
//     echo "<p>the player is {$playerAge} years old and can still play</p>";
//     $playerAge ++;
// }

// $temp = 15;

// while($temp >=5 ){
//     echo "<p>I can still survive the tempreature is {$temp} </p>";
//     $temp--;
// }

$student = 9;
do {
    echo '<p>I will give a presentt</p>';
    $student-- ;
} while ($student >= 10 );

// For

for($i = 0 ; $i <= 10; $i++){
    if($i == 8){
        echo "<h1>Warning:</h1>";
        // break;
        // continue;
        goto warning;
    }
    echo "<p>again {$i}</p>";
}

warning:
    echo '<h1>take care!</h1>';   
// foreach

// brake and goto

// continue

?>