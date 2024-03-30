<?php

if (!isset($_SESSION["id_client"])) {
    header('location:main.php');
}
$idcl = $_SESSION["id_client"];
require_once('./conndb.php');
$sql20 = "SELECT url FROM  clientimg where idc = $idcl" ;
$result20 = $conn->query($sql20);
if ($result20->num_rows > 0) {
    $row20 = $result20->fetch_assoc();
    $theimgurlp = $row20["url"];
    
    
}


?>
