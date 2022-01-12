<h1>PHP's Data Types</h1>
<p>A data typies the generic name assigned to any data sharing a common set of characteristics.</p>
<ul>
    <li>Scalar: are used to represent a single value
        <ul>
            <li>string</li>
            <li>boolean</li>
            <li>float</li>
            <li>ineger</li>
        </ul>
    </li>
    <li>
        compound
        <ul>
            <li>Array</li>
            <li>Object</li>
        </ul>
    </li>

</ul>
<?php

/**
 * DataTypes
 * 
 * Scalar Data Types: (are used to represent a single value)
 *     Boolean
 * integer, float, string, boolea
 * Compound Data Type
 * array, object
 * integer
 * Decimal, Binary, Octal, Hexadecimal
 */

 ?>
-----------------------------
<h3>Boolean</h3>
<p>represents truth, supporting only two values: true and false. Alternatively, you can use zero to represent false, and
    any nonzero value to represent true</p>
<?php
 $alive = false;     //! $alive is false.
 $alive = true;      // $alive is true.
 $alive = 1;         // $alive is true.
 $alive = -1;        // $alive is true, because -1 is nonzero.
 $alive = 5;         // $alive is true.
 $alive = 0;         //! $alive is false.
 $alive = 'a';       // $alive is true.
 $alive = '1';       // $alive is true.
 $alive = '0';       //! $alive is false.

// null = 0 = '0' = '' = false
?>
-----------------------------
<h3>Integer</h3>
<p>PHP supports integer values in several base formats:</p>
<ul>
    <li>Binary (base 2)
        <ul>
            <li>0b1010</li>
        </ul>
    </li>
    <li>Octal (base 8)
        <ul>
            <li>0755</li>
        </ul>
    </li>
    <li>decimal (base 10)
        <ul>
            <li>42</li>
            <li>-678900</li>
        </ul>
    </li>
    <li>hexadecimal (base 16)
        <ul>
            <li>0xC4E</li>
        </ul>
    </li>
</ul>
------------------------------------

<h3>Float</h3>
<p>Floating-point number, also referred to as floats, doubles, or real numbers allow you to specify numbers that contain
    fractional parts.</p>
<ul>
    <li>4.5678</li>
    <li>4.0</li>
    <li>8.7e4</li>
    <li>1.23E+11</li>
</ul>

-----------------------------
<h3>String</h3>
<p>there is somthing called numeric Strings</p>

<?php
$a = '123';
$b = '456';

echo $a + $b . "\n" ;
echo $a . $b . "\n" ;
?>
<p>Not how $a and $b are defined as strings, but when the values are added they will be converted to numbers. In the
    second example, we use the concatenation operator to add the two strings together</p>