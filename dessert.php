<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/source7.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Dessert | Janeiro</title>
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
            <h1 class="titre"> <a href=" #" class="cat">Nos Dessert </a> </h1>
            <div class="grid-plants">
             <a href="#" class="plant-box grid plant-grid1">
                 <div class="plant-bio">
                     <h1 class="plant-name">Salade de fruits</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Salade">
                     <input  type="submit" name="add_to_cart" value="ADD">
                     </form>
                     <h3 class="plant-price">10DT</h3>
                     
                 </div>
             </a>
             <a href="#" class="plant-box grid plant-grid2">
                 <div class="plant-bio">
                     <h1 class="plant-name">Boule de glace</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Glace">
                     <input  type="submit" name="add_to_cart" value="ADD">
                     </form>
                     <h3 class="plant-price">5DT</h3>
                     
                 </div>
             </a>
             <a href="#" class="plant-box grid plant-grid3">
                 <div class="plant-bio">
                     <h1 class="plant-name">Cookies</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Cookies">
                     <input  type="submit" name="add_to_cart" value="ADD">
                     </form>
                     <h3 class="plant-price">8DT</h3>
                     
                 </div>
             </a>
             <a href="#" class="plant-box grid plant-grid4">
                 <div class="plant-bio">
                     <h1 class="plant-name">Tiramisu</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Tiramisu">
                     <input  type="submit" name="add_to_cart" value="ADD">
                     </form>
                     <h3 class="plant-price">10DT</h3>
                 </div>
             </a>
                
                
             <a href="#" class="plant-box grid plant-grid5">
                 <div class="plant-bio">
                     <h1 class="plant-name">Crêpe au chocolat</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Crepe">
                     <input  type="submit" name="add_to_cart" value="ADD">
                     </form>
                     <h3 class="plant-price">13DT</h3>
                 </div>
                 <a href="#" class="plant-box grid plant-grid6">
                    <div class="plant-bio">
                        <h1 class="plant-name">Panna cotta</h1>
                        <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Pannacotta">
                     <input  type="submit" name="add_to_cart" value="ADD">
                     </form>
                        <h3 class="plant-price">13DT</h3>
                    </div>
                    <a href="#" class="plant-box grid plant-grid7">
                        <div class="plant-bio">
                            <h1 class="plant-name">Fondant</h1>
                            <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Fondant">
                     <input  type="submit" name="add_to_cart" value="ADD">
                     </form>
                            <h3 class="plant-price">10DT</h3>
                        </div>
                        <a href="#" class="plant-box grid plant-grid8">
                            <div class="plant-bio">
                                <h1 class="plant-name">mousse au chocolat</h1>
                                <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Mousse">
                     <input  type="submit" name="add_to_cart" value="ADD">
                     </form>
                                <h3 class="plant-price">6DT</h3>
                            </div>
             </a>
            
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