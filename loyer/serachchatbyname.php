<?php 
session_start();
if (!isset($_SESSION["id_client"])) {
    header('location:index.php');
}
$theclid = $_SESSION["id_client"];
require_once('./conndb.php');
$sername = $_GET["sername"];

$sql = "SELECT id,nom,prenom,ville FROM client where nom like '$sername%' or prenom like '$sername%' limit 10";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    while ($row = $result->fetch_assoc()) {
    $idser= $row['id'];
    $nomser = $row['nom'];
    $prenomser = $row['prenom'];
    $villeser = $row['ville'];


    $sql1 = "SELECT * FROM clientimg where idc = $idser limit 1";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0){
        $row1 = $result1->fetch_assoc();
        $imgclient2 = $row1['url'];

    }
    if ($theclid != $idser) {

        echo '<div class="user" onclick="window.location.href=`chatbox.php?res='.$idser.'`">';
        echo '<div class="dvuserimg">';
        echo '<img class="userimg" src="'.$imgclient2.'" alt="img">';
        echo '</div>';
        echo '<div class="userinfo">';
        echo '<h3>'.$prenomser.' '.$nomser.'</h3>';
        echo '<h4>'.$villeser.'</h4></div>';
        echo '</div>';
    }
   
    
    
 }
    
}else{
    echo '<p>Aucun utilisateur trouvé</p>';
}
?>