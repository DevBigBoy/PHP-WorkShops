<?php
$lesson_title = "Functions Part 2";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $lesson_title; ?></title>
    <style>
    body {

        font-size: 1rem;
        font-family: monospace;
        background-color: darkgoldenrod;
    }
    </style>
</head>

<body>
    <h2>Default Argument Values</h2>
    <p>Default argument values must appear at the end of the parameter list</p>
    <?php
    function calculateSalesTax($price, $tax = .0675)
    {
        $total  = $price + ($price * $tax);
        return $total;
    }

    ?>
    <p>Total cost : <?= calculateSalesTax(1500) ?></p>


    <p>if multiple optional arguments are specified, you can selectively choose which are passes along</p>

    <?php
    function calculate($price, $price2 = 0, $price3 = 0)
    {
        echo $price + $price2 + $price3;
    }

    calculate(110, 3);

    ?>

    <h2>Using Type Declarations</h2>

</body>

</html>