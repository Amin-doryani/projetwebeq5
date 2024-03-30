<?php
session_start();
if (isset($_SESSION["id_client"])) {
    $id = $_SESSION["id_client"];
$imagestab = $_SESSION["newtab"];
require_once('./conndb.php');
$titel = $_POST["titel"];
$descr = $_POST["descr"];
$city = $_POST["city"];
$addr = $_POST["addr"];
$prix = $_POST["prix"];
$sql0 = "SELECT * FROM  publication order by id DESC LIMIT 1";
$result0 = $conn->query($sql0);
if ($result0->num_rows > 0) {
    $row = $result0->fetch_assoc();
    $tt = $row["id"];
    $lastpubid =  $tt + 1;
    
}else{
    $lastpubid = 1;
}


$sql1 = "insert into publication (id,title,descr,ville,adrs,prix,idc) values ($lastpubid,'$titel','$descr','$city','$addr',$prix,$id)";
if ($conn->query($sql1) === TRUE) {
    header('location:main.php');
  } else {
    echo "Error: " . $sql1. "<br>" . $conn->error;
  }

foreach ($imagestab as $value) {
    $sql2 = "insert into img (id_p,url) values($lastpubid,'$value')";
    $result0 = $conn->query($sql2);
}
unset($_SESSION['newtab']);

}else{
    header('location:loginpage.php');
}


?>