<?php 
require_once('./conndb.php');
$idc = $_POST["idc"];
$idp = $_POST["idp"];
$sql = "DELETE FROM savep WHERE idc = $idc and idp = $idp";
if ($conn->query($sql) === TRUE) {
    echo "added";
  } 

?>