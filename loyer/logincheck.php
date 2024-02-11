<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loyer";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = $_POST["email"];
$password = $_POST["password"];
echo $email;

$sql = "SELECT id,password_c FROM client where email_c = '$email' or phone = '$email' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["logedwith"] = $email;
    $_SESSION["password_c"] = $row["password_c"];
    $_SESSION["id_client"] = $row["id"];

    $pass = $row["password_c"];
    if ($pass == $password) {
        header('location:mainpage.php');

    } else {
        header('location:loginpage.php');
        $_SESSION["loginproblem"] = "1";
    }
}else {
    header('location:loginpage.php');
    $_SESSION["loginproblem"] = "0";

}
?>