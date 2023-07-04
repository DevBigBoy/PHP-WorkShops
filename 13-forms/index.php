<?php
# If the name field is filled in
if (isset($_POST['name'])) {
    $name = escapeshellarg($_POST['name']);
    $email = strip_tags($_POST['email']);

    printf("Hi %s! <br>", $name);
    printf("The address %s will soon be a sapm-magnet! <br>", $email);
    echo $_SERVER['PHP_SELF'];
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

    <form action="" method="post">
        <p>
            Name: <br>
            <input type="text" id="name" name="name" size="20" maxlength="40">
        </p>
        <p>
            Email Address: <br>
            <input type="text" id="email" name="email" size="20" maxlength="40">
        </p>
        <input type="submit" id="submit" name="submit" value="Go!">
    </form>
</body>

</html>