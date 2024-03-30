<?php 
require_once('./conndb.php');
$idp = $_POST['product_id'];
$sql = " DELETE from publication WHERE id = $idp ";
$sql2 = " DELETE from img WHERE id_p = $idp ";
$sql3 = " SELECT * from img where id_p = $idp ";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
    while ($row = $result3->fetch_assoc()) {
        if (file_exists($row['url'])) {
            unlink($row['url']);
            
        }
    }
}
$result = $conn->query($sql);
$result2 = $conn->query($sql2);


?>