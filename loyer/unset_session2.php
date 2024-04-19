<?php
session_start();


if(isset($_POST['variable_name'])) {
    
    unset($_SESSION[$_POST['variable_name']]);
    header('location:index.php');
}
?>