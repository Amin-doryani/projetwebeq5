<?php 
session_start();
if (!isset($_SESSION["id_client"])) {
    header('location:main.php');
}
require_once('./conndb.php');
$idcl = $_SESSION["id_client"];
$sql10 = "SELECT url FROM clientimg where idc = $idcl";
$result10 = $conn->query($sql10);
if ($result10->num_rows > 0){
    $row10 = $result10->fetch_assoc();
    $imgprurl = $row10['url'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l’image</title>
    <link rel="stylesheet" href="./style/style5.css">
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
        <div class='bodydiv'>
        <div class='maindiv'>
        <div class='imgdiv'>
            <img src="<?php echo $imgprurl;?>" alt="img" class='theprofileimg'>
        </div>
        <form action="sendimg.php" method="post" enctype="multipart/form-data">
        <input type="file" name="upfile" id="upfile">

        
        <label for="upfile" class='upfile' >
        <img src="./images/upload.png" alt="img">
        <p>Modifier l’image</p>
        </label>
        </form>
        </div>
        </div>
        <script>
            const fileInput = document.getElementById('upfile');


fileInput.addEventListener('change', function () {
   
    this.form.submit();
});

    
    </script>

</body>
</html>