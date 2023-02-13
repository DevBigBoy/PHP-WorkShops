<?php
session_start();

// if the request is get
if (empty($_POST)) {
    header("location:../errors/404.php");
    die;
}
// validation
$errors = [];
if (empty($_POST['name'])) {
    $errors['name'] = "<div class='alert alert-danger'>Name Is Required</div>";
}

if (empty($_POST['email'])) {
    $errors['email'] = "<div class='alert alert-danger'>Email Is Required</div>";
}

if (empty($_POST['gender'])) {
    $errors['gender'] = "<div class='alert alert-danger'>Gender Is Required</div>";
}
// if there is no validation error
if (empty($errors)) {
    // update on session
    $_SESSION['user']->name = $_POST['name'];
    $_SESSION['user']->email = $_POST['email'];
    $_SESSION['user']->gender = $_POST['gender'];
}

$_SESSION['errors'] = $errors;
header("location: ../profile.php");
// print_r($_POST);