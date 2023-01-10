<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php WorkShop</title>
</head>
<body>
    <?php 
        // Varibles ad Datatype

        // String
        $name='ALi';
        $food = 'pizza';
        $email='aligad44@gmail.com';
        $userName = 'dddd';

        // integer
        $age = '21';
        $users= 2;
        $quantity= 3;

        // float
        $gpa=2.5;
        $price = 4.5;
        $tax_rate= 5.1;

        // Booleans
        $employes = true;
        $online= false;
        $for_sale= true;

        /* 
        echo "Hello {$name} <br>";
        echo "You like {$food} <br>";
        echo "Your Email is {$email} <br>";
        
        echo "Your are {$age} old <br>";
        echo "There are {$users} users online <br>";
        echo "you would liketo buy {$quantity} Items <br>";
        
        echo "Your Gpa is {$gpa} <br>";
        echo "your pizza is \$ {$price}  <br>";
        echo "the sales tax rate is : {$tax_rate} %<br>";
        
        echo "Online status : {$online} <br>";
        echo "the sales tax rate is : {$tax_rate} %<br>";
        */
        // echo "You have ordered {$quantity} x {$food}s <br>";
        // $total = $quantity * $price;
        // echo "You total is: \${$total}";

        // Arithmetic operator
        //  +- * / ** %

        // $x = 10;
        // $y = 2;
        // $z = null;

        // $z = $x + $y;
        // $z = $x * $y;
        // $z = $x - $y;
        // $z = $x / $y;
        // echo $z;

        // Increment / decrement operators
        // ++           --
     
        $counter = 0;
        // $counter = $counter + 1;
        $counter++;
        // $counter--;
        // $counter += 2;
        // $counter += 2;
        // echo $counter;

        // operator precedence
        // ()
        // **
        // * / %
        // + -

        $total = 1 + 2 - 3 * 4 / 5 ** 6;
        echo $total;
    ?>
   
</body>
</html>