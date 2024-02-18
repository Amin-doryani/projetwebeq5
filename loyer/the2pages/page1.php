
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
    width: 140px;
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
.resdiv form  a{
    width: 40px;
    height: 40px;
    background-image: url(./images/resimage.png);
    background-size: cover;
    border-radius: 2px;

}
</style>

<main>
        <div class="divofmain1">
            <img src="./images/logo.jfif" alt="logo" class="logoimage">

            <h1 class="logoname">LOYER.ma</h1>
        </div>
        <div class="divofmain2">
            <a href="#">HOME</a>
            <a href="#">ABOUT US</a>
            <a href="#">CONTACT</a>
            <a href="#">POLICY</a>
        </div>
    </main>
    <header>
        <h1 class="hederh1">Bienvenue sur loyer.ma 
            Le meilleur site web pour loyer 
           dans le marac</h1>
        <div class="hederbtn">
            <a href="#">Login</a>
            <a href="#">Sign up</a>
        </div>
    </header>
    <div class="resdiv">
        <form action="#">
            <input type="text" name="ville" id="ville" placeholder="ville">
            <input type="number" name="minval" id="minval" placeholder="min prix">
            <input type="number" name="maxval" id="maxval"  placeholder="max prix">
            <a href="#"></a>
            

        </form>
</div>
    