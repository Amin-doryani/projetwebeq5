<?php
session_start();
if (!isset($_SESSION["id_client"])) {
    header('location:main.php');
}
$idcl = $_SESSION["id_client"];



$img = $_FILES['upfile'];
$imgname = $_FILES['upfile']['name'];
$imgetmpname = $_FILES['upfile']['tmp_name'];
$imgerror = $_FILES['upfile']['error'];
$imgsize = $_FILES['upfile']['size'];
$imgtype = $_FILES['upfile']['type'];
$imgexp = explode('.', $imgname);
$newimgext = strtolower(end($imgexp));
$allowed = array("png","jpg","jpge",'jfif');
if (in_array($newimgext,$allowed)) {
    if ($imgerror ===  0) {
        if ($imgsize < 5000000) {
            $newimgname = uniqid('',TRUE).".".$newimgext;
            $imglink = "clientimages/".$newimgname;
            
            move_uploaded_file($imgetmpname,$imglink);
            require_once('./conndb.php');
            $sql = "UPDATE clientimg SET url = ' $imglink' WHERE idc = $idcl";
            if ($conn->query($sql) === TRUE) {
                header('location:pofileimg.php');
              } else {
                echo "Error: " . $sql1. "<br>" . $conn->error;
              }
            
            }
        }
    }
    
    
    
    ?>