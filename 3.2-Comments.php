<h1>* Commenting Your Code</h1>

<p>PHP Offers several syntactical variations</p>

<h3>Single-Line C++ Syntax</h3>

<?php
// Title: My first PHP Script
// Author: Mohamed Elshazly
echo "<p>This is a PHP Program.</p>";
?>
<p>As an alternative to the double slash, PHP also supports the Perl style comments where # is used as the character to
    indicate that the rest of the line will be treated as a comment </p>

<?php
# title: my first PHP Script
# author: mohamed elshazly
echo "<p>Both the // and # can be used anywhere on a line of code. everything to the right of the comment characters will be ignored by the php interpreter</p>";
?>
<h3>Multiple-line comments</h3>

<?php
/**
 * processes paypal payments
 * this script is responsible for processing the customer's payment via paypal.
 * accepting the customer's credit card information and billing address
 * 
 * 
 */
?>