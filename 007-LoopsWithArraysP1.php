<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops With array</title>

    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body {
            font-family: 'Courier New', Courier, monospace;
            padding: 10px;
        }

        table {
            width: 800px;
            border-collapse: collapse;
            margin: 10px 0;
        }

        table tr td, tr th {
            border: 1px solid #999;
            padding: 5px;
            font-size: 20px;
            font-weight: bold;
            text-align: left;
        }
        table tr th {
            background-color: #333;
            color: whitesmoke;
        }
        table tr:nth-child(2n) {
            background-color: #e4e4e4;
        }
        table tr td span.green{
            color: green;
        }
        table tr td span.red{
            color: red;
        }
       
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Employee Name</th>
            <th>Salary</th>
        </tr>
        
        <?php
        // Example on loops


        $employees =array('Mona', 'Ali', 'Eman', 'Yousef', 'Eslam', 'Zakaria');
        $salaries = array(3000, 8000, 2000, 3000, 1200, 8000);

        // 7.1 print the salaries on the screen

        // for ($i=0, $ii = count($salaries); $i < $ii; $i++) {
        //     echo '<h4>Employee '. $employees[$i]  .' salary\'s is '. $salaries[$i] .'</h4>';
        // }

        // 7.5 Add 10% to each salary

        for ($i=0, $ii=count($salaries); $i<$ii; $i++){
            $salaries[$i] += ($salaries[$i] * 0.1);
        }

        // 7.4 print the salaries on the screen inside table
        for ($i=0, $ii = count($salaries); $i < $ii; $i++) {
            echo "
                <tr>
                    <td>{$employees[$i]}</td>
                    <td>{$salaries[$i]} L.E</td>
                </tr>"
            ;
        }

        // 7.2 please write at the end the total amount of salaries
        $total = 0;

        // for ($i=0, $ii=count($salaries); $i<$ii; $i++){
        //     $total += $salaries[$i];
        // }

        // echo "<h2>The Total amount of salaries is {$total}</h2>";


        // 7.3 Add 10% to each salary

        // for ($i=0, $ii=count($salaries); $i<$ii; $i++){
        //     $salaries[$i] += ($salaries[$i] * 0.1);
        // }

        $total = 0;

        for ($i=0, $ii=count($salaries); $i<$ii; $i++){
            $total += $salaries[$i];
        }

        // echo "<h2>The Total amount of salaries is {$total}</h2>";
        echo "
            <tr>
                <th>Total</th>
                <th>{$total}</th>
            </tr>
        ";
        
        ?>

    </table>

    <!-- Example Two -->

    <hr>

    <table>
        <tr>
            <th>Name</th>
            <th>Arbic</th>
            <th>English</th>
            <th>Math</th>
            <th>Science</th>
            <th>Total</th>
            <th>status</th>
        </tr>
        <?php 

        $students = array(
                            'yousef',
                            'ahmed',
                            'abdelrahman',
                            'hosam',
                            'mahmoud',
                            'khaled',
                            'ziad',
                            'ibrahim',
                            'shazly',
                            'ali'
        );
        $arabic = array(
                            83,
                            80,
                            85,
                            80,
                            65,
                            55,
                            83,
                            70,
                            70,
                            70
        );
        $science = array(
                            83,
                            80,
                            85,
                            80,
                            65,
                            55,
                            83,
                            70,
                            70,
                            70
        );
        $english = array(
                            83,
                            80,
                            85,
                            80,
                            65,
                            30,
                            83,
                            70,
                            70,
                            70
        );
        $math = array(
                            83,
                            80,
                            85,
                            80,
                            65,
                            55,
                            83,
                            70,
                            70,
                            70
        );
        
        for($i=0,$ii=count($students); $i<$ii; $i++){
            $total = $arabic[$i] +$english[$i] + $math[$i] + $science[$i];
            $classColor = ($total > 200)? 'green' : 'red';
            $studentStatus = ($total > 200)? 'success' : 'fail';
            echo "
            <tr>
                <td>{$students[$i]}</td>
                <td>{$arabic[$i]}</td>
                <td>{$english[$i]}</td>
                <td>{$math[$i]}</td>
                <td>{$science[$i]}</td>
                <td>{$total}</td>
                <td>
                    <span class={$classColor}>
                    {$studentStatus}
                    </span>
                </td>
            </tr>
            ";

        }
        ?>
    </table>
</body>
</html>