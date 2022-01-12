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