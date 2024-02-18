<?php
session_start();
// unset($_SESSION['myofset2']);

require_once('./conndb.php');
$sql = "SELECT id,title,idC,prix,ville FROM publication limit 12";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loyer.ma</title>
    <link rel="stylesheet" href="style/style2.css">
</head>
<body>      
        <?php
            require_once('./the2pages/page1.php');
        ?>
         <article id="artt">
            <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='contener'>";
                    
                    $imgurl = $row["id"];
                    $sql1 = "SELECT * FROM img where id_p = $imgurl limit 1";
                    $result1 = $conn->query($sql1);
                    if ($result1->num_rows > 0){
                        $row1 = $result1->fetch_assoc();
                        echo "<div class='contener1'>";
                        echo '<img src="'.$row1["url"].'" alt="image"> ';
                        echo "</div>";

                    }
                    
                    echo "<div class='contener2'>";
                    echo "<h2>". $row["title"]."</h2>";
                    echo "<h4><span class='villetext'>Ville : </span>".$row["ville"]."</h4>";
                    echo "<h4><span class='villetext'>Prix : </span>".$row["prix"]."</h4>";

                    echo "</div>";
                    echo "</div>";
            
            
            
                }
                
            }
            ?>
         </article>
         <div class="divbtn">
            <button class="morebtn" id="morebtn" >afficher plus </button>
            
            
         </div>

         
            <!-- // crossorigin="anonymous" #this can be add with the src -->
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous" ></script>
         
         <script>
            var ofsetval = 12
            $('#morebtn').click(function () {
                // var ofsetval = 12;
                $.ajax({
                    type:"GET",
                    url : "getmorepub.php",
                    data : {myvar : ofsetval},
                    dataType : "html",
                    success : function(data){
                        const $artt = $('#artt');
                        $artt.append(data);
                    }
                });
                ofsetval += 12;
                
                
            });
         </script>
         
</body>
</html>