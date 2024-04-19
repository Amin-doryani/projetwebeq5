<?php 
session_start();

if (isset($_SESSION["id_client"])) {
    if (!isset($tableimages)) {
        $tableimages= array(); 
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/chatcss.css">
        <title>loyer</title>
        <style>
            .filediv label{
                width:100px;
                height: 20px;
                display:flex;
                justify-content:center;
                align-items:center;
                background-color:#0071BD;
                color:white;
                padding:15px 30px;
                margin:10px 0px;
                
            }
            .fileuplo{
                display:none;
                

                
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
        <div class="divcom">

        
        
        <div class="ourform">
            <form action="insertpub.php" method="post" enctype="multipart/form-data" class="form1" id="form1"></form>
            <form action="#" method="post" enctype="multipart/form-data" class="form1" id="form2"></form>
    
    
                <h1> Publier une annonce</h1>
                <h3>Titre</h3>
                <input type="text" name="titel" id="titel" class="simpleinput" placeholder="Titre" form="form1" pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
    
                <h3>Description</h3>
                <textarea name="descr" id="descr" cols="30" rows="10" required form="form1" pattern="^[^<>]*$|.*(\s|>|<)[^<>]*"></textarea>
                <br>
               
            <div class="filediv" >
                    <input type="file" name="image" id="image" form="form2" required onchange="form.submit()" class="fileuplo" id="fileuplo">
                    <label for="image"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" ><path d="M440-320v-326L336-542l-56-58 200-200 200 200-56 58-104-104v326h-80ZM240-160q-33 0-56.5-23.5T160-240v-120h80v120h480v-120h80v120q0 33-23.5 56.5T720-160H240Z"/></svg></label>
                    
                    <?php 
                        if (isset($_FILES['image'])) {
                            $img = $_FILES['image'];
                            $imgname = $_FILES['image']['name'];
                            $imgetmpname = $_FILES['image']['tmp_name'];
                            $imgerror = $_FILES['image']['error'];
                            $imgsize = $_FILES['image']['size'];
                            $imgtype = $_FILES['image']['type'];
                            $imgexp = explode('.', $imgname);
                            $newimgext = strtolower(end($imgexp));
                            $allowed = array("png","jpg","jpge",'jfif');
                            if (in_array($newimgext,$allowed)) {
                                if ($imgerror ===  0) {
                                    if ($imgsize < 5000000) {
                                        $newimgname = uniqid('',TRUE).".".$newimgext;
                                        $imglink = "pubimages/".$newimgname;
                                        if (isset($_SESSION["newtab"])) {
                                            foreach ($_SESSION["newtab"] as $value) {
                                                array_push($tableimages,$value);
                                            }
                                            
                                            array_push($tableimages,$imglink);
                                            $_SESSION["newtab"] = $tableimages;
                                        }else{
                                            array_push($tableimages,$imglink);
                                        $_SESSION["newtab"] = $tableimages;
                                        }
                                        
                                        move_uploaded_file($imgetmpname,$imglink);
                                        }
                                    }
                                }
    
                                
                                echo "<div class='divimages'>";
                                foreach ($_SESSION["newtab"] as $value) {
                                    echo "<div class='divimage'><img src='".$value."' alt='image' id='insertedimg'></div>";
                                    echo "<br>";
                                }
                                echo "</div>";
                         }
    
                    ?>
                    
               </div>
       
                
                <h3>Ville</h3>
                <input type="text" name="city" id="city" class="simpleinput" placeholder="city" form="form1" pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
                <h3> Adresse</h3>
                <input type="text" name="addr" id="addr" class="simpleinput" onfocus="" placeholder="address" form="form1" pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
                
                <h3>Prix</h3>
                <input type="number" name="prix" id="prix" class="simpleinput" placeholder="prix(DH)" form="form1" class="rdinput" pattern="^[^<>]*$|.*(\s|>|<)[^<>]*">
                <br>
                <button type="submit" class="btnsub" form="form1">Publier</button>
          
        </div>
        </div>
    </body>
    </html>
<?php
}else{
    header('location:loginpage.php');
}?>



