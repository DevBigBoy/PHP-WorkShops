<?php
/**
 * outputing Data to browser
 * echo
 * print
 * printf
 * sprintf
 * String interpolation
 * Escape sequences
 * curly braces
 * heredoc
 * Nowdoc
 * 
*/
$name = 'ali';
echo 'Welcome to my website ' . $name;
echo '
        <style>
            h1{
                color: red;
            }
        </style>

        <h1>welcome to my website</h1>
        
';

echo('mohamed');
echo '<br>';
print('just a word'); // return 1


echo '<br>';
$str = 'Welcome to my website %s';
printf($str, 'mohamed');

echo '<br>';
$welcome = "hello \n mohamed";
$welcome1 = "hello \" mohamed";
echo $welcome;
echo '<br>';
echo $welcome1;

$name_2 = 'esaam';
echo '<br>';
echo "hello {$name_2} ";
echo '<br>';


echo <<<MyTEXT
    Dum aloo (also spelled as dam aloo, Hindi: 
    दम आलू, romanized: dam ālū) or aloor dum 
    (Bengali: আলুর দম, romanized: ālūr dam) 
    or aloo dum (Odia: ଆଳୁ ଦମ, romanized: ālū dam) 
    is a potato-based curry dish.
    Dum means slow-cooked, and aloo is potato
MyTEXT

?>