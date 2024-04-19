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
.divofmain2 .awat{
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
#onelogin{
    padding: 5px 20px;
    border-radius: 5px;
    background-color: #0071BD;
    color:white;
    


}
#onelogin:hover{
    background-color:#085d96 ;
    color:white;
    
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
.main22{
    display:none;
}

@media (max-width:1350px) {
    .hederbtn{
        width:50%;
    }
}
@media (max-width:1040px) {
    main{
        display:none;
    }
    .main22{
        display:flex;
    }
}
@media (max-width:827px) {
    .hederbtn{
        width:70%;
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
            <img src="./pages/logo.jfif" alt="logo" class="logoimage">

            <h1 class="logoname">LOYER.ma</h1>
        </div>

        <div class="divofmain2">
            <a href="index.php" class="awat">HOME</a>
            <a href="#" class="awat">ABOUT US</a>
            <a href="#" class="awat">CONTACT</a>
            <a href="#" class="awat">POLICY</a>
            <a href="loginpage.php" id="onelogin">Se Connecter</a>
        </div>
        
    </main>
    <main class="main22">
        <div class="divofmain1">
            <img src="./images/logo.jfif" alt="logo" class="logoimage">

            <h1 class="logoname">LOYER.ma</h1>
        </div>
        
        <p onclick=showmenu()>
        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
        </p>
        <div class="main22divofmain2">
        <p onclick=closemenu()>
        <svg xmlns="http://www.w3.org/2000/svg" height="50"  viewBox="0 -960 960 960" width="50"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
        </p>
        

            <a href="index.php" class="maina">HOME</a>
            <a href="#" class="maina">ABOUT US</a>
            <a href="#" class="maina">CONTACT</a>
            <a href="#" class="maina">POLICY</a>
            <a href="loginpage.php" id="onelogin">Se Connecter</a>
            <a href="#" id="onelogin">Creer un compte</a>

            

            
        </div>
        
    </main>
    <script>
    function closemenu(){
        const pg = document.querySelector('.main22divofmain2');
        pg.style.display = "none";
    }
    function showmenu(){
        const pg = document.querySelector('.main22divofmain2');
        pg.style.display = "flex";
    }
</script>
</body>
</html>