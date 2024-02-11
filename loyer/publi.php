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
        <link rel="stylesheet" href="style/style1.css">
        <title>loyer</title>
    </head>
    <body>
        
        <div class="ourform">
            <form action="insertpub.php" method="post" enctype="multipart/form-data" class="form1" id="form1"></form>
            <form action="#" method="post" enctype="multipart/form-data" class="form1" id="form2"></form>
    
    
                <h1> pub information</h1>
                <h3>title</h3>
                <input type="text" name="titel" id="titel" class="simpleinput" placeholder="title" form="form1">
    
                <h3>description</h3>
                <textarea name="descr" id="descr" cols="30" rows="10" required form="form1"></textarea>
                <br>
               
            <div class="filediv" >
                    <input type="file" name="image" id="image" form="form2" required onchange="form.submit()" class="fileuplo">
                    
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
       
                
                <h3>city</h3>
                <input type="text" name="city" id="city" class="simpleinput" placeholder="city" form="form1">
                <h3> address</h3>
                <input type="text" name="addr" id="addr" class="simpleinput" onfocus="" placeholder="address" form="form1">
                <h3>Meubles</h3>
                
                <input type="radio" name="meubles" id="meubles1" value="1" form="form1" class="rdinput">
                <label for="meubles1">Yes</label>
                
        
                <input type="radio" name="meubles" id="meubles2" value="0" form="form1" class="rdinput">
                <label for="meubles2">No</label>
                <h3>leau</h3>
        
                <input type="radio" name="leau" id="leau1" value="1" form="form1" class="rdinput">
                <label for="leau1">Yes</label>
                <input type="radio" name="leau" id="leau2" value="0" form="form1" class="rdinput">
                <label for="leau2">No</label>
        
                <h3>Elec</h3>
                        
                <input type="radio" name="elec" id="elec1" value="yes" form="form1" class="rdinput">
                <label for="elec1">Yes</label>
                <input type="radio" name="elec" id="elec2" value="no" form="form1" class="rdinput">
                <label for="elec2">No</label>
                <h3>Wifi</h3>
                <input type="radio" name="wifi" id="wifi1" value="yes" form="form1" class="rdinput">
                <label for="wifi1">Yes</label>
                <input type="radio" name="wifi" id="wifi2" value="no" form="form1" class="rdinput">
                <label for="wifi2">No</label>
                <h3>Prix</h3>
                <input type="number" name="prix" id="prix" class="simpleinput" placeholder="prix(DH)" form="form1" class="rdinput">
                <br>
                <button type="submit" class="btnsub" form="form1">next</button>
          
        </div>
    </body>
    </html>
<?php
}else{
    header('location:loginpage.php');
}?>



