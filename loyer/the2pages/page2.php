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
    $sql3 = "SELECT * FROM client where id = $idc";
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    $nameC = $row3["nom"];
    $prenomC = $row3["prenom"];

    ?>
    <main class="main22" href="index.php">
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
        <a href="index.php" onclick="desco()" >Deconnexion (  <?php echo $nameC?>)</a>
        
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
            <input type="text" name="ville" id="ville" placeholder="ville" required pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
            <input type="number" name="minval" id="minval" placeholder="min prix" required pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
            <input type="number" name="maxval" id="maxval"  placeholder="max prix" required pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
            <a href="#" class='newainform' onclick="document.getElementById('form_id').submit();">Rechercher</a>
            <a href="#" class='oldainform' onclick="document.getElementById('form_id').submit();"></a>
            

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