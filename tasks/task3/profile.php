<?php
$title = "Profile";
include "layout/header.php";
include "middleware/auth.php";
include "layout/nav.php";
?>
<div class="container p-5">
    <div class="row mt-5">
        <div class="col-6 offset-3">
            <form action="post/profile_post.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-6 offset-3">
                        <img src="images/<?= $_SESSION['user']->image; ?>" alt="" class="w-100 rounded-circle">
                        <input type="file" name="image" class="form-control" id="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder=""
                        aria-describedby="helpId" value="<?= $_SESSION['user']->name; ?>">
                    <?php
                    if (!empty($_SESSION['errors']['name'])) {
                        echo $_SESSION['errors']['name'];
                    }
                    ?>

                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" value="<?= $_SESSION['user']->email; ?>"
                        class="form-control" placeholder="" aria-describedby="helpId">
                    <?php
                    if (!empty($_SESSION['errors']['email'])) {
                        echo $_SESSION['errors']['email'];
                    }
                    ?>
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="m" <?= ($_SESSION['user']->gender == 'm') ? "selected" : "" ?>>Male</option>
                        <option value="f" <?= ($_SESSION['user']->gender == 'f') ? "selected" : "" ?>>Female</option>
                    </select>
                    <?php
                    if (!empty($_SESSION['errors']['gender'])) {
                        echo $_SESSION['errors']['gender'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-warning rounded">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
unset($_SESSION['errors']);

include "layout/footer.php";