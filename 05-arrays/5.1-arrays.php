<h1>Arrays</h1>
<p>it offers an ideal way to store, manipluate, sort, and retrieve datasets.
    this chapter discusses PHP's array support and language's impressive variety of functions used to work with them.
</p>
<p>ex - the names of all employees at a corporation</p>
<p>ex - the U.S. presidents and their correspoding birth dates</p>
<p>ex - the years between 1900 and 1975</p>

<h3>What Is an Array?</h3>
<p>an array is traditionally defined as a group of items that share certain characteristics. Each item is distinguished
    by a special identifier known as a key</p>
<p>Arrays in PHP are implemented as a map with a key and value for each element</p>

<?php
$carBrands = ['cheverolet','cheyler','ford','honda','toyota'];
echo $carBrands[0];

/**
 * in the example above, php is responsible for defining the keys for each value.
 * if you want to specify other values of the key, you can do so by defining the first key or define each key individually:
 */
$carBrands=[12 =>'Rolls Roycs',"Bentley", "porche"];
$germanCars = [20 => "audi", 22 => "porche", 25 => "Vm"];

// * Like many progemming languages, PHP's numerically indexed arrays begin with position0, not 1
?>
<p><?= $carBrands[12] ?></p>
<p><?= $carBrands[13] ?></p>
<p><?= $carBrands[14] ?></p>
<p><?= $germanCars[20]?></p>
<p><?= $germanCars[22]?></p>
<p><?= $germanCars[25]?></p>

<p>An associative key logically bears a direct relation to its corresponding value.</p>

<?php
$states = ["OH" => "Ohio", "PA" => "Pennsylvania", "NY" => "New York"];
$states['OH'];
/**
 * Arrays of arrays
 */
$states = [
    "Ohio" => ["population" => "11,353,140", "capital" => "Columbus"],
    "Nebraska" => ["population" => "1,711,263", "capital" => "Omaha"]
    ];

echo $states["Ohio"]["population"];
?>
<h4>An Array pointer : The array pointer acts like a bookmark, telling you the position of the array that you’re
    presently examining</h4>
<h3>Creating An array</h3>
<p>unlike other languages PHP doesn't require that you assign a size to an array at creation time. in fact, because it's
    a loosely typed language, php doesn't require that you declare the array before using it</p>
<?php
/**
 * you can create the array simply by making a reference to it
 * like this: look down!
 */
// $state[0]= "Delaware";
// 1.  You can then display the first element of the array $state, like this

// $state[1] = "Pennsylvania";
// $state[2] = "New Jersey";
// $state[49] = "Hawaii";

// 2. If the index is already used, the value will be overwritten
// 3. If the index points to an undefined element of the array, a new element will be added

$state[] = "Pennsylvania";
$state[] = "New Jersey";
$state[] = "Hawaii";
echo "<pre>";
var_dump($state);
echo "</pre>";
?>
<p>Each time the index will be calculated as the highest numerical index plus one.</p>
<?php
$state["Delaware"] = "December 7, 1787";
$state["Pennsylvania"] = "December 12, 1787";
$state["New Jersey"] = "December 18, 1787";
$state["Hawaii"] = "August 21, 1959";
echo "<pre>";
var_dump($state);
echo "</pre>";
?>

<h3>Creating arrays with array()</h3>

<?php
$languages = array("English", "Gaelic", "Spanish");
// $languages[0] = "English" 
// $languages[1] = "Gaelic"
// $languages[2] = "Spanish"
$languages = ["Spain" => "Spanish", "Ireland" => "Gaelic", "United States" => "English"];
// $languages["Spain"] = "Spanish"
// $languages["Ireland"] = "Gaelic"
// $languages["United States"] = "English"
?>
<p>Note: When functions return arrays, it’s not necessary to assign the return value to a variable before accessing the
    individual elements.</p>
<?php
function person() {
    return ['Frank M. Kromann', 'frank@example.com', 'Author'];
}
$name = person()[0];

echo person()[0];
?>

<h3>Extracting Arrays with list()</h3>
<p>The list() construct is similar to array(), though it’s used to make simultaneous variable assignments from values
    extracted from an array in just one operation</p>

<?php
/**
 *  suppose you wanted to format and output information read from a text file named users.txt. Each line of the file contains user information, including name, occupation, and favorite color with each item delimited by a vertical bar.
 *  A typical line would look similar to the following: 
 *      Nino Sanzi|professional golfer|green
 */

// Open The users.txt file
$users = file("users.txt");

// While the End of File (EOF) hasn't been reached, get next line

foreach ($users as $user) {
    // use explode() to separate each piece of data
    list($name, $occupation, $color) = explode("|", $user);    ?>
<div>
    <p>Name: <?= $name ;?></p>
    <p>Occupation:<?= $occupation ;?></p>
    <p>Favorite Color:<?= $color ;?></p>
</div>
<?php } ;?>
------------------------------
<p>Each line of users.txt file will be read and the browser output fprmatted similarly</p>

---------------------------------
<h3>Populating Arrays with a Predefined Value Range</h3>
<p>
    the range() function provides an easy way to quickly create and fill an array consisiting of range of low and high
    ineger values. an array containing all int
</p>

<h3>Testing for an Array</h3>