<?php 
session_start();
if (!isset($_SESSION["id_client"])) {
    header('location:index.php');
}
$idc = $_SESSION["id_client"];
require_once('./conndb.php');
require_once('./gettheimgofuser.php');

$sql = "SELECT nom,prenom,ville,password_c,email_c,phone FROM client where id = $idc ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row['prenom'];
        $lastname = $row['nom'];
        $ville = $row['ville'];
        $pass = $row['password_c'];
        $phone = $row['phone'];
        $email = $row['email_c'];

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loyer profile</title>
    <link rel="stylesheet" href="./style/profilestyle.css">
    <style>
    @media (max-width:900px) {
        .profile{
            width:80%;
        }
}
@media (max-width:560px) {
        .profileimg2{
            width:60px;
            height: 60px;
        }
        .profile div{
            font-size:0.7em;
        }
}

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
        <div class = "divform">
        <form action="changeinfo.php" method="post" class="profile">
            <img src="<?php echo $theimgurlp;?>" alt="profile" class="profileimg2">
            <div><h3>Prenom:</h3></div>
            <input type="text" name="name" id="name" value="<?php echo $name; ?>">
            <div><h3>Nom:</h3></div>
            <input type="text" name="lastname" id="lastname" value="<?php echo $lastname; ?>">
            <div><h3>Email:</h3></div>
            <input type="text" name="email" id="email" value="<?php echo $email; ?>">
            <div><h3>Numéro de téléphone:</h3></div>
            <input type="number" name="number" id="number" value="<?php echo $phone; ?>" >
            <div><h3>Ville:</h3></div>
            <input type="text" name="city" id="city" value="<?php echo $ville; ?>">
            <div><h3>Mot de passe:</h3></div>
            <input type="text" name="password" id="password" value="<?php echo $pass; ?>">
            <button type="submit">Modifier</button>
        </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous" ></script>
        <script>
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