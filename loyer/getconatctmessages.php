<?php
session_start();
require_once('./conndb.php');
$theclid = $_SESSION["id_client"];
$sql = "SELECT t.*
FROM message t
JOIN (
    SELECT 
        LEAST(idc1, idc2) AS user1,
        GREATEST(idc1, idc2) AS user2,
        MAX(id) AS max_id
    FROM message
    WHERE idc1 = $theclid OR idc2 = $theclid
    GROUP BY user1, user2
) max_ids
ON ((t.idc1 = max_ids.user1 AND t.idc2 = max_ids.user2) OR (t.idc1 = max_ids.user2 AND t.idc2 = max_ids.user1))
AND t.id = max_ids.max_id ORDER BY max_id DESC ; ";

$result = $conn->query($sql);
if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        $idc1 = $row['idc1'];
        $idc2 = $row['idc2'];
        $mss = $row['mss'];
        if ($theclid ==$idc1 ) {
            $thecontact = $idc2;
        }else{
            $thecontact = $idc1;
        }
        $sql2 = "SELECT id,nom,prenom FROM client where id = $thecontact";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0){
            while ($row2 = $result2->fetch_assoc()){
                $connom = $row2['nom'];
                $conprenom = $row2['prenom'];

            }
        }
        $sql3 = "SELECT * FROM clientimg where idc = $thecontact";
        $result3 = $conn->query($sql3);

        if ($result3->num_rows > 0){
            while ($row3 = $result3->fetch_assoc()){
                $clientimg = $row3['url'];
            }
        }
        echo '<div class="contact" onclick="window.location.href=`chatbox.php?res='.$thecontact.'`">';
        echo '<div class="dv1">';
        echo '<img src="'.$clientimg.'" alt="iamge" class="contactuserprofile">';
        echo '</div>';
        echo '<div class="dv2">';
        echo '<h3>'.$conprenom.' '.$connom.'</h3>';
        echo '<p>'.$mss.'</p>';
        echo ' </div></div>';

        
                    
                        
                    
                    
                        
                        
                   


    }
}else{
    echo"<p >Ajoutez un contact maintenant </p>";
}

?>