<h1>Outputting an Array</h1>
<?php
/**
 * =========================
 *      Arrays
 * =========================
 * indexed arrays (offset, key)
 * associative arrays
 * multidimensional arrays
 * defining arrays with:
 * array()
 * list()
 * range()
*/

$salaries = array(1000, 2000, 5000, 5000, 6000, 8000, 9000, 7000);

$employees = array('ali'
                    , 'yousef'
                    , 'eslam'
                    , 'zyad'
                    , 'adham'
                    , 'khaled'
                    , 'tarek' 
                    , 'zakaria'
);

echo '<br>';
echo   $salaries[2];
echo '<br>';
echo   $salaries[3];
echo '<br>';
echo   $salaries[4];
echo '<br>';

echo '<pre>';
print_r($employees);
echo '<pre>';

echo '<pre>';
print_r($salaries);
echo '<pre>';

// adding item to the the array
$employees[] = 'ramy';

echo '<pre>';
print_r($employees);
echo '<pre>';

//associative arrays
$mydetails = array('name'=> 'mohamed elshazly',
                    'age'=>23
);

$mydetails['address']= 'cairo';

echo '<pre>';
print_r($mydetails);
echo '<pre>';

// multidimensional arrays
$class1 = array('mohamed', 'ibrahim', 'ali');
$class2 = array('Ziad', 'mostafa', 'Islam');

$school = array('ClassOne' => $class1, 'ClassTwo' =>$class2);
echo '<pre>';
print_r($school);
echo '<pre>';

echo $school['ClassOne'][0];
echo $school['ClassOne'][1];
echo $school['ClassOne'][2];

/**
 * array()
 * list()
 * range()
*/

$salaries = array(1000, 2000, 5000, 5000, 6000);

list($e1, $e2, $e3) = $salaries;
echo $e1;
echo $e2;
echo $e3;


$points = range(0, 20, 2);
echo '<pre>';
print_r($points);
echo '<pre>';


$points = range('a', 'z', 2);
echo '<pre>';
print_r($points);
echo '<pre>';
?>