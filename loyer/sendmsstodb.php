<?php
session_start();
require_once('./conndb.php');
$theclid = $_SESSION["id_client"];
$idres = $_POST['idres'];
$mss = $_POST['mss'];
$sql = "INSERT INTO message (idc1,idc2,mss) VALUES ($theclid,$idres,'$mss')";
if ($conn->query($sql) === TRUE) {
    
 }

?>