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

</style>

<main>
        <div class="divofmain1">
            <img src="./pages/logo.jfif" alt="logo" class="logoimage">

            <h1 class="logoname">LOYER.ma</h1>
        </div>
        <div class="divofmain2">
            <a href="main.php" class="awat">HOME</a>
            <a href="#" class="awat">ABOUT US</a>
            <a href="#" class="awat">CONTACT</a>
            <a href="#" class="awat">POLICY</a>
            <a href="loginpage.php" id="onelogin">Se Connecter</a>
        </div>
    </main>
</body>
</html>