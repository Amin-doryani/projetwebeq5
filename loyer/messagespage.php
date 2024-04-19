<?php
session_start();
if (!isset($_SESSION["id_client"])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <link rel="stylesheet" href="style/stylemessage.css">
    <style><?php require_once('./the2pages/style2.css'); ?></style>

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
        <div class="theapp">
            <div class="addcontact">
                <a href="searchchat.php">Rechercher un contact</a>
            </div>
            <div class="contacts" id="artt">
                
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous" ></script>
    
    <script>
        function getcontacts() {
                // const inputval = $(this).val();
                const myvalne24 = "";
                $.ajax({
                    type:"POST",
                    url : "getconatctmessages.php",
                    data : {idres : myvalne24},
                    dataType : "html",
                    success : function(data){
                        const $artt = $('#artt');
                        $artt.html(data);
                    }
                });
            }
            setInterval(getcontacts, 1000);
    </script>
</body>
</html>