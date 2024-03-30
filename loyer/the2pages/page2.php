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
            <a href="#" class="maina">HOME</a>
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
    $sql3 = "SELECT * FROM client where id = $idc";
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    $nameC = $row3["nom"];
    $prenomC = $row3["prenom"];

    ?>
    <div id="ourprofilediv">
        
        <a href="profile.php">Profil</a>
        <a href="pofileimg.php">Modifier l’image</a>
        <a href="gestiondpub.php">Publications</a>
        <a href="saved.php">Annonces enregistrées</a>

        <a href="#">Messages</a>
        <a href="main.php" onclick="desco()" >Deconnexion (  <?php echo $nameC?>)</a>
        
    </div>
    <header>
        <h1 class="hederh1">Bienvenue sur loyer.ma 
            Le meilleur site web pour loyer 
           dans le maroc</h1>
        <div class="hederbtn">
            <a href="publi.php">Publier une annonce</a>
           
        </div>
    </header>
    <div class="resdiv">
        <form action="search.php" method = 'Post' id="form_id">
            <input type="text" name="ville" id="ville" placeholder="ville" required>
            <input type="number" name="minval" id="minval" placeholder="min prix" required>
            <input type="number" name="maxval" id="maxval"  placeholder="max prix" required>
            <a href="#" onclick="document.getElementById('form_id').submit();"></a>
            

        </form>
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