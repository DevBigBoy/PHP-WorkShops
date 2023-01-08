<?php
session_start(); 
echo $_SESSION['welcome'];
echo session_id();
?>