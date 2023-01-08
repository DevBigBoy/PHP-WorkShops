<?php
/**
 * Embeding PHP Code in Your Web Pages
*/
?>

<h1>Welcome!</h1>

<p>This chapter simultaneously serves as both a tutorial for novice programmers and a reference for experienced
    programmers who are new to the PHP language.</p>
<h3>* Embedding PHP Code in Your web Pages:</h3>

<?php
echo "<p>Some dynamic output here</p>";
?>

<p>Some static output here</p>

<h3>* Short Tags</h3>
<p>Shorter delimiter syntax is available, to use this feature you need to ensure PHP's short_open_tag directive is
    enabled</p>
<?
    print "This is another PHP example.";
?>

<!-- shortcircut syntax  -->
<?="<p>This is another PHP example.</p>";?>
<!-- This is functionally equivalent to both of the following variations -->
<?= "<p>This is another PHP example.</p>"; ?>
<?php echo "<p>This is another PHP example.</p>";?>

<h3>* Embedding Multiple Code Blocks</h3>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?='Embedding PHP Code'?></title>
</head>

<body>
    <?php
        $date = "jun 20, 2023";
    ?>

    <p>Today's date is <?= $date?></p>
</body>

</html>

<p>As you can see any variables declared in a prior code block are remembered for later blocks as in the case with the
    $date variable </p>