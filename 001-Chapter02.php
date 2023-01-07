<?php
/**
 * Embed PHP code into web pages
 * Comment code using the various methodologies borrowed from :
 *  the unix shell scriptting,
 *       c,
 *       C++ languages.
 * Output data to the browser using :
 *          Echo(),
 *          print(),
 *          printf(),
 *          sprintf(),
 * UsePHP's dataTypes, 
 *          variables, 
 *          Operators, and statement to create sophisticated scripts. 
 * Take advantage of the key control structures and statement including :
 *          if-else-elseif, 
 *          while,
 *          foreach,
 *          include,
 *          require,
 *          break,
 *          continue,
 *          declare
*/
?>
<!--  2.1 Embedding PHP in your Web page -->
<!-- Each file can contain a single block of PHP code or multiple blocks embedded throughout the file -->

<h3>Welcome!</h3>
<?php
echo "<p>Some dynamic output here</p>";
?>
<p>Some static output here</p>

<?
    // short_open_tag directive is enabled
    print "This is another PHP example.";
?>


<?="This is another PHP example.";?>

<!-- Embedding Multiple Code Blocks
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Welcome to my web site!";?></title>
</head>

<body>
    <?php
    $date = "Jan 7, 2023";
    ?>
    <p>Today's date is <?=$date;?></p>
    <p>any varibles declared in a prior code block are remembered for later blocks, as in the case with the $date
        variable in this example</p>
</body>

</html>


<!-- Commenting Your Code -->

<?php 
// Single-Line C++ Syntax
// Title: My first PHP script
// Author: Jason Gilmore
echo "This is a PHP program.";


// Perl style comments
# Title: My first PHP script
# Author: Jason Gilmore
echo "<p>This is a PHP program.</p>"; # Some comment here

// Multiple-Line Comments

/**
 * ===============================================================
 **          ADVANCED DOCUMENTATION WITH PHPDOCUMENTOR: 
 * ===============================================================
 *  Because documentation is such an important part of effective code creation and management, considerable effort has been put into devising solutions for helping developers automate the process. In fact, these days advanced documentation solutions are available for all mainstreamprogramming languages, PHP included. phpDocumentor (https://www phpdoc.org) is an open source project that facilitates the documentation process by converting the comments embedded within the source code into a variety of easily readable formats including HTML and PDF.
*/

// 2.3 Outputting Data to the Client

/**
 * Print() is a function
 * Echo is a statement
 * the two have many similarities and afew differences
 * echo accepts a list of arguments, doesn't require the parentheses, doesn't return any value
*/ 
echo "I love the summertime.";
// you can also pass multiple variables to the echo() statement
$title = "<h1>Outputting content</h1>";
$body = "<p>The content of the paragraph...</p>";
echo $title , $body ;

/**
 * * when working with double-quoted strings, it's possible to embed variables directly into the string without using the concatenation operator. like this:
*/
$title = "<h2>Embdding variables into double-quoted strings</h2>";
$body = "<p>The content of the paragraph...</p>";
echo "$title  $body" ;

/**
 * Notes: PHP users prefer to use a visual cue to separate the static string from any variables
*/
echo "{$title} {$body}<p>Additional content</p>";

// Complex Output Using the printf() Statement
?>