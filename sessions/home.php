<?php
// Enable session to work
session_start();

var_dump($_SESSION);

// echo sys_get_temp_dir();
// 
// echo '<br>sess_'. session_id();

echo $_SESSION['username'];



?>