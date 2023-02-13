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
        $total = $price + ($price * $tax);
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
    <?php

    ?>
    <h2>Recursive Functions</h2>
    <p>Recursive functions, or functions that call themselves</p>
    <?php
    /**
     * Loan Payment calculator
     */

    function amortizationTable(
        $paymentNumber,
        $periodicPayment,
        $balance,
        $monthlyInterest
    ) {
        static $table = array();

        // Calculate payment interest
        $paymentInterest = round($balance * $monthlyInterest, 2);

        // Calculate payment principal
        $paymentPrincipal = round($periodicPayment - $paymentInterest, 2);

        // Deduct principal from remaining balance
        $newBalance = round($balance - $paymentPrincipal, 2);
        // If new balance < monthly payment, set to zero
        if ($newBalance < $paymentPrincipal) {
            $newBalance = 0;
        }

        $table[] = [
            $paymentNumber,
            number_format($newBalance, 2),
            number_format($periodicPayment, 2),
            number_format($paymentPrincipal, 2),
            number_format($paymentInterest, 2)
        ];
        // If balance not yet zero, recursively call amortizationTable()
        if ($newBalance > 0) {
            $paymentNumber++;
            amortizationTable(
                $paymentNumber,
                $periodicPayment,
                $newBalance,
                $monthlyInterest
            );
        }
        return $table;
    }
    // Loan balance
    $balance = 10000.00;
    // Loan interest rate
    $interestRate = .0575;
    // Monthly interest rate
    $monthlyInterest = $interestRate / 12;
    // Term length of the loan, in years.
    $termLength = 5;
    // Number of payments per year.
    $paymentsPerYear = 12;
    // Payment iteration
    $paymentNumber = 1;
    // Determine total number payments
    $totalPayments = $termLength * $paymentsPerYear;
    // Determine interest component of periodic payment
    $intCalc = 1 + $interestRate / $paymentsPerYear;
    // Determine periodic payment
    $periodicPayment = $balance * pow($intCalc, $totalPayments) * ($intCalc - 1) /
        (pow($intCalc, $totalPayments) - 1);
    // Round periodic payment to two decimals
    $periodicPayment = round($periodicPayment, 2);
    $rows = amortizationTable(
        $paymentNumber,
        $periodicPayment,
        $balance,
        $monthlyInterest
    );
    // Create table
    echo "<table>";
    echo "<tr>
<th>Payment Number</th><th>Balance</th>
Chapter 4 FunCtions108
<th>Payment</th><th>Principal</th><th>Interest</th>
</tr>";
    foreach ($rows as $row) {
        printf("<tr><td>%d</td>", $row[0]);
        printf("<td>$%s</td>", $row[1]);
        printf("<td>$%s</td>", $row[2]);
        printf("<td>$%s</td>", $row[3]);
        printf("<td>$%s</td></tr>", $row[4]);
    }
    // Close table
    echo "</table>";
    ?>

    <h2>Anonymous Functions</h2>

    <?php
    $example = function () {
        echo '<p>Hello From Anonymous Functions</p>';
    };
    $example();
    ?>
</body>

</html>