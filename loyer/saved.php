<?php 
session_start();
require_once('./conndb.php');
if (!isset($_SESSION["id_client"])) {
    header('location:main.php');
}
$theclid = $_SESSION["id_client"];
$sql = "SELECT id,title,idC,prix,ville FROM publication where id in(select idp from savep where idc = $theclid )";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style4.css">
    <style>
    <?php require_once('./the2pages/style2.css'); ?>
    
</style>
    <title>Modifier vos annonces</title>
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
        <div class="mydiv">
        
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
                    
                    

                    echo "</div>";
                    echo "</div>";
                    echo '</a>';
                    echo '<button class="deleteProduct" data-productid='.$row["id"].' >Supprimer l’annonce</button>';
                    
            
            
            
                }
                
            }else{
                echo 'Pas de résultat';
            }
            ?>
    </article>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous" ></script>
         
           
         <script>
            
            $('#artt').on('click', '.deleteProduct', function() {
            const productId = $(this).data('productid'); 
            deleteProduct(productId); 
            });



            function deleteProduct(productId) {
            $.ajax({
            url: 'deletesavedpub.php', 
            method: 'POST',
            data: { product_id: productId }, 
            success: function(response) {
            
            console.log('Product deleted successfully.');
            const $artt = $('#artt');
                        $artt.append(response);
                        window.location.reload();
            },
            error: function(error) {
            console.error('Error deleting product:', error);
            }
        });
}
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