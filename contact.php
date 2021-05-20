<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Janeiro</title>
    <link rel="stylesheet" href="css/source3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    
</head>
<body>


<section class="toppage">
    <header>
        <img class="logo" src="img/logo.png" alt="">
        <ul class="nav-links">
            <li class="main-nav"> <a class="main-link" href="acceuil.php">HOME</a> </li>
            
            <li class="main-nav "><a class="menu1" href="menu.php">MENU    
                <i class="scroll-icon fas fa-angle-down"></i>
            </a>
                
                <div class="sub-menu1">
                    <ul class=subm>
                        <li><a class="sub" href="">SANDWICH</a></li>
                        <li><a class="sub" href="">PIZZA</a></li>
                        <li><a class="sub" href="">ENTREE</a></li>
                        <li><a class="sub" href="">DESSERT</a></li>
                        <li><a class="sub" href="">BOISSON</a> </li>
                    </ul>
                </div>
            <li class="main-nav"><a class="main-link" href="acceuil.php#location">WHERE TO FIND US</a></li>
            <li class="main-nav"><a class="main-link" href="contact.php">CONTACT</a></li>
            <li class="main-nav"><a class="main-link" href="https://www.facebook.com/profile.php?id=100066502178786" target="_blank">FOLLOW US</a></li>
        </ul>
       
    </header>
    <div class="icone">
    <?php
    session_start();
    if (isset($_SESSION['text'])): { ?>
        <a href="#"><i class="cart fas fa-shopping-cart"></i></a>

<?php  } 
else: { ?>
            <a href="login.php"><i class="cart fas fa-shopping-cart"></i></a>
            <?php } endif;

if (isset($_SESSION['text'])): { ?>
 <a href="php/logout.php"><i class="login fas fa-sign-out-alt"></i></a>
  <?php  } 
else: { ?>
    
        <a href="login.php"><i class="login fas fa-sign-in-alt"></i></a>
    
      <?php } endif; ?>
    </div>
    <div class="ecriture">
        <h1 class="locations">Contact Us</h2>
            <form method="POST" action="php/contact.php" id="contact-form">      
                <input name="name" type="text" class="feedback-input" placeholder="Name" />   
                <input name="email" type="text" class="feedback-input" placeholder="Email" />
                <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
                <input type="submit" value="SUBMIT"/>
              </form>
    </div>
</section>
<footer>
    <h4>Rue Abourraihan Al Bayrouni, Ariana
    </h4>
    <h2 class="copyright">
        &copy;2021 JANEIRO. ALL RIGHTS RESERVED. 
    </h2>
</footer>

</body>
</html>