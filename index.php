<?php 
header('location: 001-chapter02.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>

    <?php
        /**
         * ==============================
         *           Function
         * ==============================
         * how to create and invoke them
         * pass input to them 
         * use type hinting 
         * return both single and multiple values to the caller
         * create and include function libraries
         * 
        */

        // Invoking a Function
        // echo pow(5,3);

        // echo "Five raised to the third power equals ".pow(5,3).".";


        // $arr1 = ['magdi','heba', 'Tru'];
        // $arr2 = [2,3,3.5];

        // function loop($array){
        //     foreach($array as $Value){
        //         echo $Value.'<br>';
        //     }
        // }
        
        // loop($arr1);
        // loop($arr2);

        // ====================================
        
        // see the difference

        // function g($x){
        //     echo $x;
        // }

        // echo 40 + g(10);

        // function v($x){
        //     return $x;
        // }

        // echo 40 + g(10);
        // echo 40 + v(10);

        // =========================================

        // Type hunting

        // function f1(int $x) : void
        // {
        //     echo $x.' | ';
        // }

        // f1(5);
       
        // function f2(int $x) : int
        // {
        //     return $x;
        // }

        // f2(5);

    //     function f3(int | float $x) : int | bool
    //     {
    //         return $x;
    //     }

    //    $result =  f3(9);

    //    echo $result;


        // reference
        // function number1(&$x){
        //     return ++$x;
        // }

        // $n1 = 10;

        // echo "<hr>";
        // echo number1($n1);
        // echo "<hr>";
        // echo $n1;
        // echo "<hr>";
        
        // // value
        // function number($x){
        //     return ++$x;
        // }
        
        // $n = 15;
        
        // echo "<hr>";
        // echo number($n);
        // echo "<hr>";
        // echo $n;
        // echo "<hr>";
        //anaomous function

        // $welcome = function(){
        //     echo "hello";
        // };

        // $welcome();

        

        session_start();
        // echo $_SESSION['username']
        
        
    ?>
    <!-- 
      <form action="reslt.php" method="post">
        <input type="text" id="fnum" name="fnum">
        <input type="text" id="snum" name="snum">
        <input type="submit" value="Submit">

      </form> -->
    <!-- <form action="reslt.php" method="POST">
        <input type="text" name="fnum">
        <input type="text" name="snum">
        <select name="op" >
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="submit" value="Submit">
      </form> -->
</body>

</html>