
<style>
    *{
    padding: 0px ;
    margin: 0px ;
    box-sizing: border-box;
}
body{
    height:90vh;
}
.logoimage{
    width: 50px;
}
main{
    width: 100%;
    height: max-content;
    
    
    display: flex;
    justify-content: space-between;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-bottom: 10px;
    
}
.divofmain1{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;

}
.divofmain2{
     min-height: 100%;
     display: flex;
     justify-content: space-around;
     align-items: center;
     width: 60%;
     
}
.divofmain3{
    display:none;
    position: fixed;
    top:0;
    right: 0;
    height: 100vh;
    width:100%;
    flex-direction: column;
    justify-content: flex-start;
    background-color:white;
    row-gap:20px;

}
.divofmain3 a{
    text-decoration: none;
    color: black;
    
    padding-left:10px;
    width:100%;
    font-size:2em;
}
.themenuicon{
    width:50px;
    display:none;
}
.divofmain3 a:hover{
    background-color: #f0f0f0;
}
.divofmain2 a{
    text-decoration: none;
    font-size: 1.3em;
    color: black;
}
a:hover{
    color: #0071BD;
   border-bottom: 2px solid #0071BD;
   
}
.logoname{
    color: #0071BD;
}
header{
    width: 100%;
    height: 90%;
    border: 1px solid black;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-image: url(./images/mymainimae.png);
    background-size: cover;
    
    
}

.hederh1{
    width: 40%;
    text-align: center;
    margin-bottom: 25px;
    
    color: white;
}
.hederbtn{
    width: 30%;
    height: max-content;
    
    display: flex;
    justify-content: space-around;
    
}
.hederbtn a{
    text-decoration: none;
    color: white;
    border: 2px solid #0071BD;
    font-size: 1.5em;
    width: 200px;
    padding: 12px 0px;
    text-align: center;
    border-radius: 5px;
    transition: 1.5s;
    
    font-weight: bold;
    
    
}
.hederbtn a:hover{
    background-color:#0071BD ;
    color: white;
}
.resdiv{
    width: 100%;
    height: 80px;
    background-color:#0071BD ;
    margin-bottom:30px;
}
.resdiv form{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.resdiv form input{
    height: 40px;
    padding-left: 10px;
    border: 0px solid black;
    border-radius: 2px;
}
.resdiv form input button{
    height: 70px;

}
.resdiv form  .oldainform{
    width: 40px;
    height: 40px;
    background-image: url(./images/resimage.png);
    background-size: cover;
    border-radius: 2px;

}
.newainform{
    display:none;
}
.thepofthemenu{
    display:none;
}
@media (max-width:1350px) {
    .hederbtn{
        width:50%;
    }
}
@media (max-width:827px) {
    .hederbtn{
        width:70%;
    }
    .thepofthemenu{
        display:block;
    }
    .divofmain3{
        display:none;
    }
    .divofmain2{
        display:none;
    }
    .thecloseicon{
        display:block;
        width:45px;
        height: 45px;
        
    }
    .themenuicon{
        display:block;
    }
    


}
@media (max-width:800px){
    .resdiv{
        height: max-content;


    }
    .resdiv form{
        flex-direction: column;
        row-gap:20px;
        padding:50px;
    }
    .oldainform{
        display:none;
    }
    .newainform{
        display:block;
        width: max-content !important;
        background-image: none !important;
        color:black;
        text-decoration: none;
        background-color:white !important;
        text-align: center;
        height: max-content !important;
        padding: 10px 15px !important;
        
    }
    .hederh1{
        width:80%;
    }
}
    @media (max-width:600px){
    .hederbtn{
        
        display:flex;
        flex-direction: column !important;
        justify-content: center;
        align-items: center;
        row-gap:30px;
        
        
        
    }
    .header{
        display:flex;
        flex-direction: column !important;
        justify-content: center;
        align-items: center;
        border:0px solid black !important;

    }
    .hederh1{
        width:80%;
    }


}
    

</style>

<main>
        <div class="divofmain1" href="index.php">
            <img src="./images/logo.jfif" alt="logo" class="logoimage">

            <h1 class="logoname">LOYER.ma</h1>
        </div>
        <!-- <img class="themenuicon"  onclick=showmenu() src="./images/menu.png" alt="img"> -->
        <p onclick=showmenu() class="thepofthemenu">
        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </p>
        <div class="divofmain2">

            <a href="index.php">HOME</a>
            <a href="#">ABOUT US</a>
            <a href="#">CONTACT</a>
            <a href="#">POLICY</a>
        </div><div class="divofmain3">
        <!-- <img class="thecloseicon" onclick=closemenu() src="./images/close1.png" alt="img"> -->
        <p onclick=closemenu()>
        <svg xmlns="http://www.w3.org/2000/svg" height="50"  viewBox="0 -960 960 960" width="50"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </p>

            <a href="index.php">HOME</a>
            <a href="#">ABOUT US</a>
            <a href="#">CONTACT</a>
            <a href="#">POLICY</a>
        </div>
    </main>
    <header>
        <h1 class="hederh1">Bienvenue sur loyer.ma 
            Le meilleur site web pour loyer 
           dans le maroc</h1>
        <div class="hederbtn">
            <a href="loginpage.php">Se Connecter</a>
            <a href="#">Creer un compte</a>
        </div>
    </header>
    <div class="resdiv">
        <form action="search.php" method = 'Post' id="form_id" >
            <input type="text" name="ville" id="ville" placeholder="ville" required>
            <input type="number" name="minval" id="minval" placeholder="min prix" required>
            <input type="number" name="maxval" id="maxval"  placeholder="max prix" required>
            <a href="#" class='newainform' onclick="document.getElementById('form_id').submit();">Rechercher</a>
            <a href="#" class='oldainform' onclick="document.getElementById('form_id').submit();"></a>
            

        </form>
</div>
<script>
    function closemenu(){
        const pg = document.querySelector('.divofmain3');
        pg.style.display = "none";
    }
    function showmenu(){
        const pg = document.querySelector('.divofmain3');
        pg.style.display = "flex";
    }
</script>
    