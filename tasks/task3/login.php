<?php
$title = 'login';
include 'layout/header.php';
include 'layout/nav.php';
// very simple app authentication task
$users = [
    (object) [
        'id' => 1,
        'name' => 'ahmed',
        "gender" => 'm',
        'image' => '1.jpg',
        'email' => 'ahmed@gmail.com',
        'password' => 123456,
    ],
    (object) [
        'id' => 1,
        'name' => 'moahmed',
        "gender" => 'm',
        'image' => '2.jpg',
        'email' => 'mohamed@gmail.com',
        'password' => 123456,
    ],
    (object) [
        'id' => 1,
        'name' => 'esraa',
        "gender" => 'f',
        'image' => '3.jpg',
        'email' => 'esraa@gmail.com',
        'password' => 123456,
    ],
];

// Validation
// empty()
// isset()
if ($_POST) {
    // print_r($_POST);
    // die;
    $errors = [];
    if (empty($_POST['email'])) {
        $errors['email'] = "<div class='alert alert-danger'>Email Is Required</div>";
    }
    if (empty($_POST['password'])) {
        $errors['password'] = "<div class='alert alert-danger'>password Is Required</div>";
    }

    if (empty($errors)) {
        foreach ($users as $index => $user) {
            if ($_POST['email'] == $user->email && $_POST['password'] == $user->password) {
                // authenticated user
                // store user data into session
                $_SESSION['user'] = $user;
                //header user to home page
                header("location: home.php");
                die;

                //break loop


            }
        }
        // un authenticated user => print error message
        $errors['wrong-attempt'] = "<div class='alert alert-danger'>unvalid email or passwordl!</div>";
    }

    // print_r($errors);
    // die;
}

?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-dark h1">Login</h1>
        </div>
        <div class="offset-4 col-4 mt-2">
            <form method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="
                        <?php if (isset($_POST['email'])) {
                            echo $_POST['email'];
                        } ?>" placeholder="Enter Your email" aria-describedby="helpId">
                    <?php
                    if (isset($errors['email'])) {
                        echo $errors['email'];
                    }
                    if (isset($errors['wrong-attempt'])) {
                        echo $errors['wrong-attempt'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="Password">Password</label>
                    <input type="Password" name="password" id="Password" class="form-control"
                        placeholder="Enter Your Password" aria-describedby="helpId">
                    <?php
                    if (isset($errors['password'])) {
                        echo $errors['password'];
                    }
                    if (isset($errors['wrong-attempt'])) {
                        echo $errors['wrong-attempt'];
                    } ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-dark rouded">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include 'layout/footer.php'; ?>