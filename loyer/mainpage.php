<?php
session_start();
if (isset($_SESSION["logedwith"])) {
    $email = $_SESSION["logedwith"];
    $id = $_SESSION["id_client"];
    echo "welcome ".$email;
    echo "<br><a href='publi.php'>add pub</a>";
}
?>