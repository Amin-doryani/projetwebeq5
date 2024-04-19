<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        @media (max-width:1200px){
        .div2{
            display: none ;
       
            }
        .div1{
            width:100%;
        }

        }
        @media (max-width:500px){
        .div2{
            display: none ;
       
            }
          
    
        .div1 form input{
            width: 80%;

        }

        }
    </style>
</head>
<body>
    <div class="div1">
        <main>
            <div class="div3">
                <img src="images/logo.jfif" alt="logo" class="logo">
                <h1 class="loyerlogoh1">LOYER.ma</h1>
            </div>
            <div class="div4"><a href="main.php"><img src="images/bakcicon.png" alt="back" class="backlogo"></a></div>
        </main>
        <form action="logincheck.php" method="post">
            <h2>Se connecter</h2>
            <h3>Email ou Numéro de téléphone :</h3>
            <input type="text" id="email" name="email" placeholder="email@gmail.com" required pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
            <h3>Mot de passe :</h3>
            <input type="password" name="password" id="password" placeholder="mot de passe" required pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
            
            





            <?php 
            
if (isset($_SESSION["loginproblem"])) {
   
    if ($_SESSION["loginproblem"] == '1') {
     echo "<p class='pp'>mot de passe incorrect </p>";
        
    }elseif ($_SESSION["loginproblem"] == '0') {
        echo "<p class='pp'>utilisateur introuvable</p>";
    }
    
}

?>














            <button type="submit">Se connecter</button>
            <p>vous n’avez pas de compte?<a href="#">Créer un compte</a></p>
            
        </form>
    </div>
    <div class="div2">
        <img src="images/loginicon.png" alt="login" class="loginlogo">
    </div>
<?php session_destroy(); ?>
    
</body>
</html>