<?php 
session_start();
require_once('./conndb.php');
if (!isset($_SESSION["id_client"])) {
    header('location:index.php');
}
$theclid = $_SESSION["id_client"];
$idres = $_GET['res'];
$sql = "SELECT id,nom,prenom,ville FROM client where id = $idres";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0){
                        $row = $result->fetch_assoc();
                        $idser= $row['id'];
                        $nomser = $row['nom'];
                        $prenomser = $row['prenom'];
                        $villeser = $row['ville'];
                        $sql1 = "SELECT * FROM clientimg where idc = $idser limit 1";
                        $result1 = $conn->query($sql1);
                        if ($result1->num_rows > 0){
                            $row1 = $result1->fetch_assoc();
                            $imgclient2 = $row1['url'];
                    
                        }
                    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/boxchatstyle.css">
    <style>
        <?php require_once('./the2pages/style2.css'); ?>
    </style>
    <title>Messages</title>
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
    <section>
        <div class="box">
            <div onclick="window.location.href='messagespage.php'" class='backdivicon'>
                <img src="./images/bakcicon.png" alt="img" class='backicon'>
            </div>
            <div class="userbox">
                <div class="userimg">
                    <img src="<?php echo $imgclient2;?>" alt="image" class="userimgpr">
                </div>
                <div class="userinfos">
                   
                    <h3><?php echo $prenomser.' '.$nomser ; ?></h3>
                    <h4><?php echo $villeser ?></h4>
                </div>

            </div>
            <div class="messagebox" id='artt'>
                
                

            </div>
            <div class="sendbox">
                <input type="text" id="sendms" placeholder="Entrez votre message" >
                <button type="button" onclick='sendmss()'><img src="./images/send-message.png" alt="image" class="sendicon"></button>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous" ></script>
    <script>
        var previousData = '';
            
             function getchat() {
                // const inputval = $(this).val();
                const myvalne24 = <?php echo $idres;?>;
                $.ajax({
                    type:"POST",
                    url : "getchat.php",
                    data : {idres : myvalne24},
                    dataType : "html",
                    success : function(data){
                        const $artt = $('#artt');
                        $artt.html(data);
                        
                        
                        if (data !== previousData){
                            previousData = data;
                            $('.messagebox').scrollTop($('.messagebox')[0].scrollHeight);
                        }

            
                    }
                });
            }
            // $(document).ready(function() {
                
            //     $('.messagebox').scrollTop($('.messagebox')[0].scrollHeight);
            // });
            function sendmss() {
                const inputval = document.querySelector('#sendms').value;
                const myvalne24 = <?php echo $idres;?>;
                $.ajax({
                    type:"POST",
                    url : "sendmsstodb.php",
                    data : {idres : myvalne24,mss:inputval},
                    dataType : "html",
                    success : function(data){
                        document.querySelector('#sendms').value = "";
                    }
                });
                
            }
            setInterval(getchat, 1000);
            
            
    </script>
</body>

   
</html>