<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bERSERK GURKHAS</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <i class="fas fa-gamepad"></i>
                <p>The Game Zone</p>
            </div>
            <ul class="navbar">
                <li><a href="#" class="active">XBOX</a></li>
                <li><a href="#">ARCADE</a></li>
                <li><a href="#">FIFA 21</a></li>
                <li><a href="#">PES 4</a></li>
                <li><a href="#">NINTEDO</a></li>
                <li><a href="#">NBA MATCH</a></li>
            </ul>
            <button type="button" id="btn"><i class="fas fa-play"></i>PLAY NOW</button>
        </header>

        <div class="content-wrapper">
            <div class="content-desc">

                <h1>THE GAME ZONE</h1>
                <p>Compete with <span>Aretha</span> in this immense challenge and be the 
                    winner of all TIme.</p>
                <p>Our Top Players are waiting for your challenge, click the 
                    button below to get started.</p>

                <button id="btn2">Challenge Aretha Now</button>
            </div>

            <div class="rakuto"></div>
        </div>
    </div>

    <div class="logo-section">
        
        <i class="fas fa-gamepad"></i>
        <h1>The Game Zone</h1>
    </div>
    
    <section class="section-1">
        <div class="section-1-wrapper">  
            <h1>ACTION GAMES</h1>
            <br>
            <div class="section-1-img">
                <a href="#"><div class="img img-1"></div></a>
                <a href="#"><div class="img img-2"></div></a>
                <a href="#"><div class="img img-3"></div></a>
                <a href="#"><div class="img img-4"></div></a>
                <a href="#"><div class="img img-5"></div></a>
                <a href="#"><div class="img img-6"></div></a>
                <a href="#"><div class="img img-2"></div></a>
                <a href="#"><div class="img img-3"></div></a>
            </div>
        </div>
        
        <div class="game-categories">
            <h1>GAME CATEGORIES</h1>
            <div class="game-wrapper">
                <a href="#"><div class="gw gw-1"></div></a>
                <a href="#"><div class="gw gw-2"></div></a>
                <a href="#"><div class="gw gw-3"></div></a>
                <a href="#"><div class="gw gw-4"></div></a>
                <a href="#"><div class="gw gw-5"></div></a>
            </div>
    
            <div class="game-wrapper left">
                <a href="#"><div class="gw gw-6"></div></a>
                <a href="#"><div class="gw gw-7"></div></a>
                <a href="#"><div class="gw gw-8"></div></a>
                <a href="#"><div class="gw gw-9"></div></a>
                <a href="#"><div class="gw gw-10"></div></a>
            </div>
        </div>
    </section>

    <section class="section-2">
        <h1>The Grande Match</h1>
        <div class="players">
            <div class="p-image p-image-1"></div>
            <span>Vaklish</span>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="players">
            <div class="p-image p-image-2"></div>
            <span>Lontona</span>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
           
        <div class="players">
            <div class="p-image p-image-3"></div>
            <span>Vickish</span>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
            
        <div class="players">
            <div class="p-image p-image-4"></div>
            <span>Pakito</span>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    </section>
    <div class="section-3">
        <h1>What People say About us</h1>
        <div class="section-3-wrapper">
            <div class="feedback"></div>
            <div class="feedback-desc">
                <p>A Nepali gaming gem! Berserk Gurkhas offers a unique gaming experience 
                    that represents the best of Nepal's creativity and passion. 
                    From stunning graphics to captivating storylines, their games keep us 
                    hooked for hours!" - Gamer4Life</p>
                <br>
                <i class="far fa-grin-squint-tears"></i><br>
                <h4>OSCAR</h4>
            </div>
           
            <div class="feedback f-img-2"></div>
            <div class="feedback-desc">
                <p>Finally, a gaming website that celebrates Nepali culture and talent. 
                    Berserk Gurkhas' games not only entertain but also educate players about 
                    Nepal's rich history and traditions. It's a refreshing change 
                    from mainstream gaming!" - ExploreNepal</p>
                <br>
                <i class="far fa-grin-beam-sweat"></i><br>
                <h4>MARIO</h4>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-body">
            <div class="logo footer-logo">
                <i class="fas fa-gamepad"></i>
                <h1>The Game Zone</h1>
            </div>
            <ul>
                <h3>Short Links</h3>
                <li><a href="#">Arcade</a></li>
                <li><a href="#">War Zone</a></li>
                <li><a href="#">Fifa Game</a></li>
                <li><a href="#">Pes 2020</a></li>
                <li><a href="#">Xbox Game</a></li>
            </ul>

            <ul>
                <h3>Action Games</h3>
                <li><a href="#">Anpar</a></li>
                <li><a href="#">BattleField</a></li>
                <li><a href="#">The Ghost</a></li>
                <li><a href="#">Fortnite</a></li>
                <li><a href="#">Cold War</a></li>
            </ul>
            <ul>
                <h3>Get In Touch</h3>
                <li><a href="#"><i class="fab fa-facebook"></i>Facebook</a></li>
                <li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                <li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i>Linkedin</a></li>
            </ul>
        </div>
    </footer>
    <div class="footer-bottom">
        <p>Copyright &copy; All Right Reserved | Designed <span>By Aretha's Gaming</span> 2023</p>
    </div>
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Roboto&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}
body{
    background: #1a0327;
    font-family: 'Poppins', sans-serif;
    height: 350vh;
}
.container{
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(/WEBSITEWEB/b.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
header{
    width: 100%;
    height: 10vh;
    background:rgba(0,0,0,0.5);
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 300px;
    height: 10vh;
    background: #550381;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    clip-path: polygon(0 0, 100% 0, 64% 100%, 0% 100%);
    padding: 10px;
    line-height: 1.3rem;
}
.logo p{
    width: 130px;
    margin-left: 10px;
    font-size: 20px;
}
.logo .fas{
    font-size: 50px;
}
ul.navbar{
    display: flex;
    list-style: none;
}
ul.navbar li{
    width: 120px;
}
ul.navbar li a{
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}
ul.navbar li a.active{
    color: #FEC53A;
}
ul.navbar li a:hover:not(.active){
    color: #FEC53A;
}
#btn{
    width: 250px;
    height: 10vh;
    background: #FEC53A;
    color: #000;
    outline: none;
    border: none;
    clip-path: polygon(35% 0, 100% 0, 100% 100%, 0% 100%);
    font-size: 1.2rem;
    font-weight: bold;
    text-align: right;
    padding-right: 40px;
}
#btn .fas{
    margin-right: 10px;
}

.content-wrapper{
    width: 80%;
    min-height: 80vh;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;
}


.content-desc h1{
    font-size: 3rem;
    margin-bottom: 10px;
}
.content-desc p{
    width: 550px;
    font-size: 1.3rem;
    line-height: 2rem;
    margin-bottom: 10px;
}
.content-desc span{
    color: #FEC53A;
}
#btn2{
    width: 350px;
    height: 10vh;
    padding-left: 20px;
    outline: none;
    border: none;
    background: #FEC53A;
    font-size: 1.2rem;
    font-weight: bold;
    margin-top: 15px;
    clip-path: polygon(0 0, 74% 0, 100% 100%, 0% 100%);
    border-radius: 20px;
    text-align: left;
}
.rakuto{
    width: 400px;
    height: 400px;
    background: linear-gradient(rgba(38, 2, 39, 0.849),rgb(204, 115, 14));
    background-size: cover;
    background-position: center;
    position: relative;
}
.rakuto::before{
    content: '';
    width: 160px;
    height: 160px;
    background: url(/WEBSITEWEB/cube.png);
    background-position: center;
    background-size: cover;
    position: absolute;
    top: 10px;
    left: 200px;
}
.rakuto::after{
    content: '';
    width: 400px;
    height: 400px;
    background: url(/WEBSITEWEB/rakuto.png);
    background-size: cover;
    background-position: center;
    position: absolute;
    bottom: 0px;
    left: -150px;
}
.logo-section{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 30px 0;
}
.logo-section .fas{
    font-size: 6rem;
    color: #FEC53A;
}
.logo-section h1{
    width: 250px;
    font-size: 2rem;
    color: #FEC53A;
    margin-left: 10px;
}

.section-1{
    width: 100%;
    height: 100vh;
    background: linear-gradient(rgba(0, 0, 0, 0.767),rgba(0, 0, 0, 0.712)),
    url(../images/fortnit.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;

}
.section-1-wrapper{
    width: 70%;
    margin: auto;
}
.section-1 h1{
    width: 500px;
    color: #FEC53A;
    font-size: 1.5rem;
    position: relative;
    font-weight: 400;
}
.section-1-img{
    display: flex;
}
.section-1-img .img{
    width: 100px;
    height: 130px;
    background: url(/WEBSITEWEB/jumanji.jpg);
    background-size: cover;
    background-position: center;
    margin-right: 10px;
    border-radius: 10px;
}
.section-1-img .img-2{
    background: url(/WEBSITEWEB/nba.jpg);
    background-size: cover;
    background-position: center;
}
.section-1-img  .img-3{
    background: url(/WEBSITEWEB/battlefield.jpg);
    background-size: cover;
    background-position: center;
}
.section-1-img  .img-4{
    background: url(/WEBSITEWEB/warxone.jpg);
    background-size: cover;
    background-position: center;
}
.section-1-img  .img-5{
    background: url(/WEBSITEWEB/craft.jpeg);
    background-size: cover;
    background-position: center;
}
.section-1-img  .img-6{
    background: url(/WEBSITEWEB/fortnite.jpg);
    background-size: cover;
    background-position: center;
}
.img:hover{
    transform: translateY(-10px);
}

.game-categories{
    width: 70%;
    margin: 50px auto;
    position: relative;
}
.game-categories h1{
    font-size: 1.5rem;
    margin-bottom: 20px;
    color: #FEC53A;
}
.game-wrapper{
    display: flex;
}
.gw{
    width: 120px;
    height: 120px;
    background: url(/WEBSITEWEB/asphalt8.jpg);
    background-size: cover;
    background-position: center;
    margin: 20px 15px 0 0;
    border-radius: 10px;
}
.gw:hover{
    transform: translateY(-10px);
}
.left{
    position: relative;
    right: -140px;
}

.gw-1{
    background: url(/WEBSITEWEB/pes22.webp);
    background-size: cover;
    background-position: center;
}
.gw-2{
    background: url(/WEBSITEWEB/carrace.jpg);
    background-size: cover;
    background-position: center;
}
.gw-3{
    background: url(/WEBSITEWEB/Anpar.jpg);
    background-size: cover;
    background-position: center;
}
.gw-4{
    background: url(/WEBSITEWEB/warxone.jpg);
    background-size: cover;
    background-position: center;
}
.gw-5{
    background: url(/WEBSITEWEB/wras.jpg);
    background-size: cover;
    background-position: center;
}
.gw-6{
    background: url(/WEBSITEWEB/battle.jpg);
    background-size: cover;
    background-position: center;
}
.gw-7{
    background: url(/WEBSITEWEB/download.jpg);
    background-size: cover;
    background-position: center;
}
.gw-8{
    background: url(/WEBSITEWEB/battlefield.jpg);
    background-size: cover;
    background-position: center;
}
.gw-9{
    background: url(/WEBSITEWEB/craft.jpeg);
    background-size: cover;
    background-position: center;
}
.section-2{
    width: 100%;
    height: 50vh;
    background-image:linear-gradient(rgba(0, 0, 0, 0.767),rgba(0, 0, 0, 0.712)),
    url(/WEBSITEWEB/flame.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.section-2 h1{
    font-size: 2rem;
    color: #fff;
    margin: 20px 0;
}
.players{
    display: flex;
    flex-direction: column;
    text-align: center;
}
.p-image{
    width: 200px;
    height: 200px;
    background: url(/WEBSITEWEB/vaklish.png);
    background-size: cover;
    background-position: center;
    border-radius: 50%;
    position: relative;
}
.p-image-1::after{
    content: 'VS';
    position: absolute;
    right: -35px;
    bottom: 0;
    font-size: 2rem;
    color: #FEC53A;
}
.players span{
    font-size: 1.5rem;
    color: #FEC53A;
    font-weight: bold;
    margin-bottom: 10px;
}
.stars{
    color: #FEC53A;
}
.p-image-2{
    background: url(/WEBSITEWEB/rakuto.png);
    background-size: cover;
    background-position: center;
}

.p-image-2{
    background: url(/WEBSITEWEB/rakuto.png);
    background-size: cover;
    background-position: center;
}
.p-image-3::after{
    content: 'VS';
    position: absolute;
    right: -35px;
    bottom: 0;
    font-size: 2rem;
    color: #FEC53A;
}
.p-image-4{
    background: url(/WEBSITEWEB/rakuto.png);
    background-size: cover;
    background-position: center;
}


.section-3{
    width: 100%;
    height: 80vh;
    background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(/WEBSITEWEB/controller.jpg);
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.section-3 h1{
    font-size: 2rem;
    color: #fff;
    text-align: center;
    font-weight: 400;
}

.section-3-wrapper{
    display: flex;
    min-height: 70vh;
    align-items: center;
    justify-content: center;
}

.feedback{
    width: 250px;
    height: 300px;
    background: url(/WEBSITEWEB/feedback.jpg);
    background-position: center;
    background-size: cover;
 
}
.feedback-desc{
    width: 300px;
    height: 300px;
    background: rgba(0, 0, 0, 0.767);
    padding: 10px;
    color: #fff;
    margin-right: 10px;
}
.feedback-desc .far{
    color: #FEC53A;
    font-size: 30px;
}
.f-img-2{
    background: url(/WEBSITEWEB/image9.jpg);
    background-position: center;
    background-size: cover;
}

footer{
    width: 100%;
    height: 55vh;
    background: #282828;
    display: flex;
    align-items: center;
    
}
.footer-body{
    width: 90%;
    margin: auto;
    display: flex;
    justify-content: space-around;
}
.footer-logo{
    height: 12vh;
    background-color: #FEC53A;
    color: #000;
    line-height: 1.7rem;
}
ul h3{
    color: #fff;
    font-weight: 450;
}
ul li{
    list-style: none;
    line-height: 2.5rem;
}
ul li a{
    text-decoration: none;
    color: #fff;
}
ul li a .fab{
    font-size: 1.2rem;
    color: #FEC53A;
    margin-right: 15px;
}
ul li a:hover{
    color: #FEC53A;
}
.footer-bottom{
    width: 100%;
    height: 7vh;
    background: #1B1919;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.875rem;
}
.footer-bottom span{
    color: #FEC53A;
    font-weight: bold;
}
</style>