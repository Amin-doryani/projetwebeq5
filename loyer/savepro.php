<?php 
require_once('./conndb.php');
$idc = $_POST["idc"];
$idp = $_POST["idp"];
$sql = "insert into savep (idc,idp) values ($idc,$idp)";
if ($conn->query($sql) === TRUE) {
    echo "added";
  } 

?>