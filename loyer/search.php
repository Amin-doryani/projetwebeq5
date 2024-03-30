<?php
session_start();
if (!empty($_POST['ville'])) {
    $thecity = $_POST['ville'];
}else{
    $thecity = '';
}
if (!empty($_POST['minval'])) {
   $minprice = $_POST['minval'];
}else{
    $minprice = 1;
}
if (!empty($_POST['maxval'])) {
    $maxprice = $_POST['maxval'];
    
}else{
    
    $maxprice = 1000000;
    
}




require_once('./conndb.php');
$sql = "SELECT id,title,idC,prix,ville FROM publication where ville = '$thecity' and prix > $minprice and prix < $maxprice  limit 12";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="style/style2.css">
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
<div class="resdiv">
        <form action="search.php" method = 'Post' id="form_id" >
            <input type="text" name="ville" id="ville" placeholder="ville" required>
            <input type="number" name="minval" id="minval" placeholder="min prix" required>
            <input type="number" name="maxval" id="maxval"  placeholder="max prix" required>
            <a href="#" onclick="document.getElementById('form_id').submit();"></a>
            

        </form>
</div>
<article id="artt">
    
            <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<a href='propage.php?id=".$row['id']."' class='thecon'>";
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
                    // echo "<a href='propage.php?id=".$row['id']."' class='thecon'>More </a>";


                    echo "</div>";
                    echo "</div>";
                    echo '</a>';
                    
            
            
            
                }
                
            }else{
                echo '<h3 class="Nores">Aucun résultat</h3>';
            }
            ?>
         </article>
         <div class="divbtn">
            <button class="morebtn" id="morebtn" >afficher plus </button>
            
            
         </div>
         <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous" ></script>
         <script>
            var ofsetval = 12
            $('#morebtn').click(function () {
                // var ofsetval = 12;
                $.ajax({
                    type:"GET",
                    url : "getmoresearcpub.php",
                    data : {myvar : ofsetval,myvar1 :'<?php echo $thecity;?>',myvar2 :<?php echo $minprice; ?>,myvar3 :<?php echo $maxprice; ?>},
                    dataType : "html",
                    success : function(data){
                        const $artt = $('#artt');
                        $artt.append(data);
                    }
                });
                ofsetval += 12;
                
                
            });
            function desco(){
                $.ajax({
            type: "POST",
            url: "unset_session.php", 
            data: { variable_name: "id_client" }
        
            });
             }
         </script>
</body>
</html>