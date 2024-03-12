<?php
session_start();
$idc = $_SESSION["id_client"];
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$number = $_POST['number'];
$city = $_POST['city'];
$password12 = $_POST['password'];

require_once('./conndb.php');
$sql = "UPDATE client SET nom = '$lastname', prenom = '$name', email_c =  '$email', phone = $number , ville = '$city', password_c = '$password12'  WHERE id = $idc ";
if ($conn->query($sql) === TRUE) {
    header('location:profile.php');
  }
?>