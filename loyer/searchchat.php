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
    <title>Search</title>
    <link rel="stylesheet" href="./style/stylesearch.css">
    <style>
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
    <section>
        <div class="thesearchdiv">
        <div onclick="window.location.href='messagespage.php'" class='backdivicon'>
                <img src="./images/bakcicon.png" alt="img" class='backicon'>
            </div>
            <div class="dv1">
                <input type="text" name="serch" id="serch" placeholder="Entrez le nom ou prenom..." class="inputuser">
                <button type="button"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg></button>

            
            
            </div>
        <div class="dv2" id="artt">
            <p>Loyer.ma</p>
            
             
            
        </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous" ></script>
    <script>
            
            $('#serch').on('input' ,function () {
                const inputval = $(this).val();
                $.ajax({
                    type:"get",
                    url : "serachchatbyname.php",
                    data : {sername : inputval},
                    dataType : "html",
                    success : function(data){
                        const $artt = $('#artt');
                        $artt.html(data);
                    }
                });
            
            });
    </script>
</body>
</html>
