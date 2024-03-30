<?php 
session_start();
require_once('./conndb.php');
$idp = $_POST['product_id'];
$idc = $_SESSION['id_client'];
$sql = " DELETE from savep WHERE idp = $idp and idc = $idc ";
if ($conn->query($sql) === TRUE) {
    
    
  } 

?>