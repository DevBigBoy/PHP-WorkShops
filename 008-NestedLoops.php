<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nested Loops</title>

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
        table tr th[data-class-name] {
            background-color: #445069;
        }
        table tr th[data-best-score]{
            background-color: #F7E987;
            color: #333;
        }
       
    </style>
</head>
<body>
    <?php
        // Nested loops
        $class1= array(
            array('mohamed', 50, 50, 45),
            array('ALi', 75, 73, 73),
            array('Yousef', 76, 78, 80),
            array('zakaria', 70, 78, 85),
            array('Eslam', 90, 85, 88),
        );

        $class2= array(
            array('hend', 50, 55, 65),
            array('sohila', 75, 73, 73),
            array('yosra', 76, 78, 80),
            array('rania', 70, 78, 85),
            array('sara', 90, 85, 88),
            array('heba', 90, 85, 88),
        );

        $school = array($class1, $class2);
    ?>

    <table>
        <tr>
            <th>Name</th>
            <th>Arabic</th>
            <th>Math</th>
            <th>English</th>
            <th>Total</th>
            <th>percentage</th>
            <th>status</th>
        </tr>
        <?php
        $total = 0;
        $percentage = 0;
        $cssclass ='';
        $status = '';
        $student =0;
        $bestStudent = 0;
        //  School have two class
        for($i=0, $ii=count($school); $i < $ii ; $i++){
            echo "
            <tr>
            <th data-class-name=\"class ".($i + 1) ."\" colspan=\"7\">Class ". ($i + 1) ."
            </th>
            </tr>
            ";

            //  class have differenet students
            for($s= 0, $ss=count($school[$i]); $s < $ss; $s++){
                $total = $school[$i][$s][1]+$school[$i][$s][2]+$school[$i][$s][3];
                $percentage = ($total /300) * 100 ;
                $cssclass = ($total < 150)? 'red': 'green';
                $status = ($total < 150)? 'fail': 'success';
                
                if ($total > $bestStudent){
                    $bestStudent = $total;
                    $student = $s;
                }
                echo "                       
                        <tr>
                            <td>{$school[$i][$s][0]}</td>
                            <td>{$school[$i][$s][1]} </td>
                            <td>{$school[$i][$s][2]}</td>
                            <td>{$school[$i][$s][3]}</td>
                            <td>{$total}</td>
                            <td>".( round($total / 300 * 100, 2)) ." %</td>
                            <td>
                                <span class=\"{$cssclass}\">
                                    {$status}
                                </span>
                            </td>
                        </tr>    
                    ";
            }   

            echo "
                <tr>
                    <th data-best-score=\"class ".($i + 1) ."\" colspan=\"7\">
                    best Score is for student {$school[$i][$student][0]} => {$bestStudent}
                    </th>
                </tr>
            ";

            $bestStudent = 0;
            $student = 0;

        }

            
        ?>
    </table>
    <!-- For Each Loops -->

    <?php
        $employees =array('Mona' => 1000, 
                           'Yousef' => 2000, 
                           'Eslam' => 3000, 
                           'Zakaria' => 5000
        );

        foreach($employees as $item){
            echo $item;
            echo'<br>';
        }
        echo'<hr>';
        foreach($employees as $name => $salary){
            echo $name;
            echo $salary;
            echo'<br>';
        }
    ?>

    
</body>
</html>