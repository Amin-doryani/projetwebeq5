<?php
 require_once('./gettheimgofuser.php'); 
?>
<head>
    <!-- <link rel="stylesheet" href="style2.css"> -->
   
    
</head>
<body>
    <main>
        <div class="divofmain1" href="index.php">
            <img src="./images/logo.jfif" alt="logo" class="logoimage">

            <h1 class="logoname">LOYER.ma</h1>
        </div>
        <div class="divofmain2">
            <a href="index.php" class="maina">HOME</a>
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
    <main class="main22">
        <div class="divofmain1">
            <img src="./images/logo.jfif" alt="logo" class="logoimage">

            <h1 class="logoname">LOYER.ma</h1>
        </div>
        
        <p onclick=showmenu()>
        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </p>
        <div class="main22divofmain2">
        <p onclick=closemenu()>
        <svg xmlns="http://www.w3.org/2000/svg" height="50"  viewBox="0 -960 960 960" width="50"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </p>
        <p class="pofthemainofachraf"><img src="<?php echo $theimgurlp; ?>" alt="image" class="profileimg"  >  <span><?php echo $nameC." ".$prenomC?></span></p>

            <a href="index.php" class="maina">HOME</a>
            <a href="#" class="maina">ABOUT US</a>
            <a href="#" class="maina">CONTACT</a>
            <a href="#" class="maina">POLICY</a>
            <a href="publi.php" id="publierbtn2">Publier une annonce</a>
            <a href="profile.php">Profil</a>
            <a href="pofileimg.php">Modifier l’image</a>
            <a href="gestiondpub.php">Publications</a>
            <a href="saved.php">Annonces enregistrées</a>

            <a href="messagespage.php">Messages</a>
            <a href="index.php" onclick="desco()" >Deconnexion (  <?php echo $nameC?>)</a>

            
        </div>
        
    </main>
    <div id="ourprofilediv">
        
        <a href="profile.php">Profil</a>
        <a href="pofileimg.php">Modifier l’image</a>
        <a href="gestiondpub.php">Publications</a>
        <a href="saved.php">Annonces enregistrées</a>
        <a href="messagespage.php">Messages</a>
        <a href='index.php' onclick="desco()" >Deconnexion (  <?php echo $nameC?>)</a>
        
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
        function closemenu(){
        const pg = document.querySelector('.main22divofmain2');
        pg.style.display = "none";
    }
    function showmenu(){
        const pg = document.querySelector('.main22divofmain2');
        pg.style.display = "flex";
    }
    
      
        

    </script>
</body>
</html>