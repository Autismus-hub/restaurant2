<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janeiro</title>
    <link rel="stylesheet" href="css/source.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
</head>
<body>


<section class="toppage">
   
    <header>
        <img class="logo" src="img/logo.png" alt="">
        <ul class="nav-links">
            <li class="main-nav"> <a class="main-link" href="#home">HOME</a> </li>
            
            <li class="main-nav "><a class="menu1" href="menu.php">MENU    
                
            </a>
                
                <div class="sub-menu1">
                    <ul class=subm>
                        <li><a class="sub" href="sandwitch.php">SANDWICH</a></li>
                        <li><a class="sub" href="pizza.php">PIZZA</a></li>
                        <li><a class="sub" href="entrée.php">ENTREE</a></li>
                        <li><a class="sub" href="dessert.php">DESSERT</a></li>
                        <li><a class="sub" href="boisson.php">BOISSON</a> </li>
                    </ul>
                </div>
            <li class="main-nav"><a class="main-link" href="#location">WHERE TO FIND US</a></li>
            <li class="main-nav"><a class="main-link" href="contact.php">CONTACT</a></li>
            <li class="main-nav"><a class="main-link" href="https://www.facebook.com/profile.php?id=100066502178786" target="_blank">FOLLOW US</a></li>
        </ul>
       
    </header>
    <div class="icone">
    <?php
    session_start();
    if (isset($_SESSION['text'])): { ?>
        <a href="panier.php"><i class="cart fas fa-shopping-cart"></i></a>
        <a href="php/logout.php"><i class="login fas fa-sign-out-alt"></i></a>
<?php  } 
else: { ?>
            <a href="login.php"><i class="cart fas fa-shopping-cart"></i></a>
            <a href="login.php"><i class="login fas fa-sign-in-alt"></i></a>
            <?php } endif;


 ?>
  
    

    
       
    </div>
    <div class="landing">
        <h1 class="big-title">
            Janeiro, where the food takes you to nirvana.
        </h1>
        <a href="#delivery" class="delivery-link">
            <span class="scroll-text" data-text="Scroll">Scroll</span>
            <i class="scroll-icon fas fa-angle-down"></i>
        </a>
    </div>
</section>


<div class="straightline">

    <hr>    

</div>


<section id="delivery" class="delivery-container">
    <div class="shop">
        <i class="delivery-icon fas fa-dungeon"></i>
        <p class="box-content">
            Open from 12PM to 12AM 24/7
        </p>
    </div>
    <div class="withdrawal">
        <i class="delivery-icon fas fa-pizza-slice"></i>
        <p class="box-content">
            The food is up to your standards
        </p>
    </div>
    <div class="delivery">
        <i class="delivery-icon fas fa-motorcycle"></i>
        <p class="box-content">
            Home delivery
        </p>
    </div>
    
</section>


<section id="home" class="home">
    <div class= "slider">
        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">
            <div class="slide first">
                <img src="img/pizza.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/quindim.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/sandwish.jpg" alt="">
            </div>
            <div class="slide">
                <img src="img/salade.jpg" alt="">
            </div>
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"> </div>
            </div>
        </div>
        <div class="navigation-man">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
        </div>

    </div>
    <h2 class="Jane">JANEIRO <br/>
        Where your satisfaction is our main concern</h2>
</section>

<section id="location" class="location">
    <div class="ecriture">
        <h1 class="locations">Our Location</h2>
    </div>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8044.435743327853!2d10.187973959804088!3d36.855988767477854!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb4b0eb7c1d9%3A0x31dc6ea669baadcd!2sInstitut%20sup%C3%A9rieur%20d&#39;informatique%2C%20Rue%20Abourraihan%20Al%20Bayrouni%2C%20Ariana!5e0!3m2!1sfr!2stn!4v1618501506370!5m2!1sfr!2stn" width="200" height="450"  loading="lazy"></iframe>


</section>

<footer>
    <h4>Rue Abourraihan Al Bayrouni, Ariana
    </h4>
    <h2 class="copyright">
        &copy;2021 JANEIRO. ALL RIGHTS RESERVED. 
    </h2>
</footer>
<script type="text/javascript">
var counter =1;
setInterval(function() {
    document.getElementById('radio'+counter).checked=true;
    counter++;
    if (counter>4) {
        counter=1;

    }
},5000);
</script>
</body>
</html>