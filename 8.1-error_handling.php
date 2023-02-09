<?php
/**
 * error_reporting()
 * display_errors()
 * display_startup_errors()
 * error_get_last()
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error and Exception Handling</title>
    <style>
    body {

        font-size: 1rem;
        font-family: monospace;
        background-color: darkgoldenrod;
    }
    </style>
</head>

<body>
    <h1>Error and Exception Handling</h1>
    <p>This chapter introduces several features that PHP has to offer for handling errors and other unexpected events
        (known as exceptions)</p>
    <p>Parse error: syntax error, unexpected '}' , expecting end of file in
        /Applications/first.php on line 7</p>
    <?php
    /**
     * !  Ex 1
     *     $arr = [4,5,6,7];
     *   foreach($arr as $item)
     *       echo $item
     *   }
     * 
     * ? Do you see the error? The foreach statement’s opening bracket is missing
     * ? the closing bracket located on the last line has no match
     */
    ?>
    <hr>

    <h3>Configuring PHP’s Error Reporting Behavior</h3>
    <?php
        /**
         * ini_set('error_reporting', E_ALL);
         */
    ?>
    <p>when your application is running in the production environment, you never want to output any ugly errors to the
        browser or API client, meaning you want to control how and where errors are displayed</p>
    <hr>
    <h3>Displaying Errors Within the Browser</h3>
    <p>- Enabling the display_errors directive results in the display of any errors meeting the criteria defined by
        error_reporting</p>
    <p>- You should enable this directive only during development and ensure it is disabled when the site is running in
        production because the display of such messages is not only likely to further confuse the end user but could
        also <i>expose sensitive information</i></p>
    <p>Like this => Warning: fopen(configuration.ini): failed to open stream: Permission denied in
        /home/www/htdocs/www.example.com/configuration.ini on line 3</p>
    <hr>

    <h3>Logging Errors</h3>
</body>

</html>