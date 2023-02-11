<?php

$title = 'home';
include "layout/header.php";
include "layout/nav.php";


?>
<div class="container">

    <h1 class="mt-5">Hello, <?= $_SESSION['user']->name; ?> </h1>
</div>
<?php

include "layout/footer.php";
?>