<?php
 require_once('./gettheimgofuser.php'); 
?>
<head>
    <!-- <link rel="stylesheet" href="style2.css"> -->
   
    
</head>
<body>
    <main>
        <div class="divofmain1">
            <img src="./images/logo.jfif" alt="logo" class="logoimage">

            <h1 class="logoname">LOYER.ma</h1>
        </div>
        <div class="divofmain2">
            <a href="main.php" class="maina">HOME</a>
            <a href="#" class="maina">ABOUT US</a>
            <a href="#" class="maina">CONTACT</a>
            <a href="#" class="maina">POLICY</a>
            <a href="publi.php" id="publierbtn">Publier une annonce</a>
            <img src="<?php echo $theimgurlp; ?>" alt="image" class="profileimg" onclick="profilem()" >
        </div>
    </main>
    <?php 
    require_once('./conndb.php');
    $idc=$_SESSION["id_client"];
    $sql5 = "SELECT * FROM client where id = $idc";
    $result5 = $conn->query($sql5);
    $row5 = $result5->fetch_assoc();
    $nameC = $row5["nom"];
    $prenomC = $row5["prenom"];

    ?>
    <div id="ourprofilediv">
        
        <a href="profile.php">Profil</a>
        <a href="pofileimg.php">Modifier l’image</a>
        <a href="gestiondpub.php">Publications</a>
        <a href="saved.php">Annonces enregistrées</a>
        <a href="#">Messages</a>
        <a href='main.php' onclick="desco()" >Deconnexion (  <?php echo $nameC?>)</a>
        
    </div>
    
    
    <script>
        let divnow = false;
        function profilem() {
            if (divnow == false) {
                document.getElementById('ourprofilediv').style.display = 'block';
                divnow = true;
            }else{
                document.getElementById('ourprofilediv').style.display = 'none';
                divnow = false;
            }
            
        };
        
        
        

    </script>
</body>
</html>