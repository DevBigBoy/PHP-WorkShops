<h1>Outputting Data to the Client</h1>
<p>
    the most common is the
    <a href="">print()</a> function and the <a href="">echo()</a> statment.the two have many similarities and a few
    differences. Echo accepts alist of arguments, does not require the parentheses, and does not return any value.
</p>
<?php

echo "<p>I love the summertime.</p>";
// You can also pass multiple variables to the echo() statement

$title= '<h2>Outputing Content</h2>';
$body='<p>You can also pass multiple variables to the echo() statement</p>';

echo $title, $body;
?>
<p>when working with double-quoted strings, it's possible to embed variables directly into the string without using the
    concatenation operator</p>

<?php
$title= '<h2>Outputing Content</h2>';
$body='<p>You can also pass multiple variables to the echo() statement</p>';

echo "$title $body";
?>

<h2>Complex Output Using the printf() Statement</h2>
<p>The printf() statement is ideal when you want to output a blend of static text anddynamic information stored within
    one or several variables</p>

<?php
printf("<p>Bar inventory: %d bottles of tonic water</p>", 100);
printf("<p>%d bottles of tonic water cost $%0.2f.</p>", 100, 43.50);
?>

<h2>The Sprintf() statement</h2>
<p>The sprintf() statement is functionally identical to printf() except that the output is assigned to a string rather
    than rendered as output to the client </p>

<?php 
$cost = sprintf("$%.2f", 43.2);
echo $cost
?>