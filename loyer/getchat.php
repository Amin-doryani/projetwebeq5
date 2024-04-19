<?php
session_start();
require_once('./conndb.php');
$theclid = $_SESSION["id_client"];
$idres = $_POST['idres'];
$sql = "SELECT mss,idc1,idc2 FROM message where (idc1 = $theclid  and idc2 = $idres) or (idc2 = $theclid  and idc1 = $idres) limit 50";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $mss = $row['mss'];
        $idc1 = $row['idc1'];
        $idc2 = $row['idc2'];
        if ($theclid == $idc1) {
            echo '<p class="rmessage">'.$mss.'</p>';
            
        }elseif ($idres == $idc1) {
            echo '<p class="lmessage">'.$mss.'</p>';
        }
    }
}else{
    
}

?>