<?php
require_once('./conndb.php');
$myoffset = $_GET['myvar'];
$sql = "SELECT id,title,idC,prix,ville FROM publication limit 12 OFFSET $myoffset";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<a href='propage.php?id=".$row['id']."' class='thecon'>";
        echo "<div class='contener'>";
        
        $imgurl = $row["id"];
        $sql1 = "SELECT * FROM img where id_p = $imgurl limit 1";
        $result1 = $conn->query($sql1);
        if ($result1->num_rows > 0){
            $row1 = $result1->fetch_assoc();
            echo "<div class='contener1'>";
            echo '<img src="'.$row1["url"].'" alt="image"> ';
            echo "</div>";

        }
        
        echo "<div class='contener2'>";
        echo "<h2>". $row["title"]."</h2>";
        echo "<h4><span class='villetext'>Ville : </span>".$row["ville"]."</h4>";
        echo "<h4><span class='villetext'>Prix : </span>".$row["prix"]."</h4>";
        // echo "<a href='propage.php?id=".$row['id']."' class='thecon'>More </a>";

        echo "</div>";
        echo "</div>";
        echo '</a>';



    }
    
}else{
    ?>
     <script>
        alert("No More Data");
     </script>
    <?php
}
?>