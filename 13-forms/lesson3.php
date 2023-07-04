<?php
# Working with Multivalued Form Components

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];

    if ($name != '') {
        // echo 'no name';
        printf("Hi %s! <br>", $name);
    }

    if ($email != '') {
        // echo 'no email';
        printf("The address %s will soon be a sapm-magnet! <br>", $email);
    }

    // echo $_SERVER['PHP_SELF'];
    // if (count($languages) != 0) {
    //     foreach ($languages as $key => $value) {
    //         printf("Favorite programming language is <br>", $value);
    //     }
    // }

    if (is_array($_POST['languages'])) {
        foreach ($_POST['languages'] as $language) {
            $language = htmlentities($language);
            echo "You like the following languages: $language<br>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="post">
        <p>
            Name: <br>
            <input type="text" id="name" name="name" size="20" maxlength="40">
        </p>
        <p>
            Email Address: <br>
            <input type="text" id="email" name="email" size="20" maxlength="40">
        </p>


        <p> What's your favorite programming language?
        </p>
        <select name="languages[]" multiple="multiple">
            <option value="csharp">C#</option>
            <option value="javascript">JavaScript</option>
            <option value="perl">Perl</option>
            <option value="php">PHP</option>
        </select>
        <br>
        <!-- <input type="checkbox" name="languages[]" value="csharp">C#<br>
        <input type="checkbox" name="languages[]" value="javascript">JavaScript<br>
        <input type="checkbox" name="languages[]" value="perl">Perl<br>
        <input type="checkbox" name="languages[]" value="php">PHP<br>
        <input type="submit" name="submit" value="Submit!"> -->
        <input type="submit" id="submit" name="submit" value="Go!">
    </form>
</body>

</html>