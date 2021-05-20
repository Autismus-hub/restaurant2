<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/source2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Menu | Janeiro</title>
</head>
<body>
    <section class="toppage">
        <header>
            <img class="logo" src="img/logo.png" alt="">
            <ul class="nav-links">
                <li class="main-nav"> <a class="main-link" href="acceuil.php#home">HOME</a> </li>
                
                <li class="main-nav "><a class="menu1" href="menu.php">MENU    
                
                </a>
                    
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


        <div class="images">
           <h1 class="titre"> <a href=" #" class="cat">Catégories </a> </h1>
           <div class="grid-plants">
            <a href="pizza.php" class="plant-box grid plant-grid1">
                <div class="plant-bio">
                    <h1 class="plant-name">Pizza</h1>
                    
                </div>
            </a>
            <a href="entrée.php" class="plant-box grid plant-grid2">
                <div class="plant-bio">
                    <h1 class="plant-name">Entrée</h1>
                    
                </div>
            </a>
            <a href="dessert.php" class="plant-box grid plant-grid3">
                <div class="plant-bio">
                    <h1 class="plant-name">Dessert</h1>
                    
                </div>
            </a>
            <a href="sandwitch.php" class="plant-box grid plant-grid4">
                <div class="plant-bio">
                    <h1 class="plant-name">Sandwish</h1>
                    
                </div>
            </a>
            <a href="boisson.php" class="plant-box grid plant-grid5">
                <div class="plant-bio">
                    <h1 class="plant-name">Boisson</h1>
                    
                </div>
            </a>
           
        </div>

    </section>
    <footer>
         <h5 class="copyright">
            &copy;2021 JANEIRO. ALL RIGHTS RESERVED. 
        </h5>
        <br>
    </footer>

</body>
</html>
