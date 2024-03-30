<?php
session_start();
require_once('./conndb.php');


$pubid = $_GET['id'];

$sql = "select * from publication where id = $pubid ";
$sql2 = "select * from img where id_p = $pubid ";
$sql3 = "select * from img where id_p = $pubid limit 1 ";






$result = $conn -> query($sql);

while ($row = $result ->fetch_assoc()) {
                        
    $adrs = $row['adrs'];
    $ville =  $row['ville'];
    $prix =  $row['prix'];
    $descr = $row['descr'];
    $id_c = $row['idc'];

}
$sql4 = "select * from client where id = $id_c ";
$sql6 = "select url from clientimg where idc = $id_c ";
$result6 = $conn->query($sql6);
if ($result6->num_rows > 0) {
    $row6 = $result6->fetch_assoc();
    $theclprim = $row6["url"];
    
    
}


$result2 = $conn -> query($sql2);
$result3 = $conn -> query($sql3);
$row3 = $result3 ->fetch_assoc();
$result4 = $conn -> query($sql4);
$row4 = $result4 -> fetch_assoc();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style3.css">
    <title></title>
    <style>
        <?php require_once('./the2pages/style2.css'); ?> 
    </style>
</head>
<body>
    
        <?php 
        if (isset($_SESSION["id_client"])) {

            $theclid = $_SESSION["id_client"];
            require_once('./pages/tt.php'); 
            
            
            
        
        }else{
            require_once('./pages/one.php'); 
            
        }
        ?>
    
    <div class="main">
        <div class="images">
            <div class="mainimage">
                <img src="<?php echo $row3['url'];?>" alt="mainimage" id="featured">
            </div>
            
            <div class="themainofthemain">
            <img id="slideLeft" class="arrow" src="images/arrow-left.png">
            <div class="theimages" id="slider">
                <?php
                    while ($row2 = $result2 ->fetch_assoc()) {
                        
                        $theurl = $row2['url'];
                        echo '<img src="'.$theurl.' " alt="image" class="oneimage">';
                        
                
                    }
                ?>
            </div>
            <img id="slideRight" class="arrow" src="images/arrow-right.png">
            </div>
            
        </div>










        <div class="info">
            <div class="userinfo">
                <img class="userprofile" src="<?php echo $theclprim; ?>" alt="profileimg">
                <h3><?php echo $row4["nom"];?></h3>
                <h3><?php echo $row4["prenom"];?></h3>
                
                <a href="#" class="usercontact">Contact</a>
                
                
            </div>
            <?php
            if (isset($_SESSION["id_client"])){
                $sql7 = "select * from savep where idp = $pubid  and idc = $theclid ";
                $result7 = $conn->query($sql7);
                if ($result7->num_rows > 0) {
                    echo '<div class="savebtndiv">';
                    echo  '<button type="button" class="usercontact savepub" onclick="unsave()"><img class="stars" src="./images/unsave.png" alt="img"></button>';
                    echo  '</div>';
                }else{
                    echo '<div class="savebtndiv">';
                    echo  '<button type="button" class="usercontact savepub" onclick="savepro()"><img class="stars" src="./images/save.png" alt="img"></button>';
                    echo  '</div>';
                }
                
            }
            
            ?>
            
            

            <div class="pubinfo">

                <?php 
                    
                ?>
                <h3>Ville: <?php echo $ville?> </h3>
                <h3>Adresse: <?php echo $adrs ?></h3>
                <h3>Numéro de téléphone: <?php echo $row4['phone'];?></h3>

                <h3>Prix: <?php echo $prix;?> (DH)</h3>
                <h3>Description:</h3>
                <p><?php echo $descr;?></p>
            </div>
        </div>
                </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous" ></script>
    <script>
        let oneimages = document.getElementsByClassName('oneimage')



        for (var i=0; i < oneimages.length; i++){

            oneimages[i].addEventListener('click', function(){
             document.getElementById('featured').src = this.src
            })
        }
        let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');
        buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 400
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 400
		})
        function desco(){
                $.ajax({
                type: "POST",
                url: "unset_session.php", 
                data: { variable_name: "id_client" }
        
                });
                }
        function savepro(){
                <?php
            
                echo "let theclid = " . json_encode($theclid) . ";";
                echo "let pubid = " . json_encode($pubid) . ";";
                ?>
                $.ajax({
                type: "POST",
                url: "savepro.php", 
                data: { idc: theclid ,idp : pubid },
                success: function(response) {
                if (response.trim() === "added") {
                    
                    document.querySelector('.stars').src = "./images/unsave.png";
                    document.querySelector('.savepub').setAttribute("onclick", "unsave()");
                }
            }
        
                });
                }
                function unsave(){
                <?php
            
                echo "let theclid = " . json_encode($theclid) . ";";
                echo "let pubid = " . json_encode($pubid) . ";";
                ?>
                $.ajax({
                type: "POST",
                url: "unsavepro.php", 
                data: { idc: theclid ,idp : pubid },
                success: function(response) {
                if (response.trim() === "added") {
                    
                    document.querySelector('.stars').src = "./images/save.png";
                    document.querySelector('.savepub').setAttribute("onclick", "savepro()");
                }
            }
        
                });
                }
        
    </script>
</body>
</html>