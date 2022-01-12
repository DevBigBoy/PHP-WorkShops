<h1>Compound Data Type</h1>
<p>Compound data types allow for multiple items of the same type or different types to be aggregated under a single
    representative entity. The array and the object fall into this category.</p>

<h3>Array</h3>
<?php ?>

<h3>object</h3>

<?php
class Appliance{
    private $_power;

    function setPower($status){
        $this->_power = $status;
    }}
    
$blender = new Appliance;
$blender->setPower('on');
?>

<h3>Converting Between Data Types Using Type Casting</h3>
<p>Converting values from one data type to another is known as type casting. This is accomplished by placing the
    intended type in front of the variable to be cas
</p>
<p>Type Casting Operators :</p>
<table border="1">
    <thead style="background: #B84;">
        <tr>
            <th>Cast Operators</th>
            <th>Conversion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                (array)
            </td>
            <td>Array</td>
        </tr>
        <tr>
            <td>
                (bool)(boolean)
            </td>
            <td>Boolean</td>
        </tr>
        <tr>
            <td>
                (int)(integer)
            </td>
            <td>Integer</td>
        </tr>
        <tr>
            <td>
                (object)
            </td>
            <td>Object</td>
        </tr>
        <tr>
            <td>
                (Real)(double)(float)
            </td>
            <td>Float</td>
        </tr>
        <tr>
            <td>
                (string)
            </td>
            <td>String</td>
        </tr>
    </tbody>
</table>

<p>Let's Consider several Examples</p>
<?php
 $score = (int) 14.5; // $score = 14
 $sentence = 'this is a sentence';
    echo (int) $sentence;
?>

<h3>Adapting Data Types with <i>Type Juggling</i> </h3>
<P>
    Because of PHP's lax aatitude toward type definitions, variables are sometimes automatically cast to best fit the
    circumstances in which they are referenced
</P>
<?php
$total = 5;
$count = "15";
$total = $total + $count;
echo $total;

$total = "45 fire engines";
$incoming = 10;
echo $incoming + $total; // 55s
?>
<p>The integer value at the beginning of the original $total string is used in the calculation. However, if it begins
    with anything other than a numerical representation, the value is 0</p>

<h3>Type Identifier Functions</h3>
<ul>
    <li>
        is_array()
    </li>
    <li>
        is_bool()
    </li>
    <li>
        is_float()
    </li>
    <li>
        is_null()
    </li>
    <li>
        is_object()
    </li>
    <li>
        is_resourse()
    </li>
    <li>
        is_scalar()
    </li>
    <li>
        is_string()
    </li>
    <li>
        is_numeric()
    </li>
</ul>
<?php
$item = 43;
printf("The variable \$item is of type array: %d <br />", is_array($item));
printf("The variable \$item is of type integer: %d <br />", is_integer($item));
printf("The variable \$item is numeric: %d <br />", is_numeric($item));
?>