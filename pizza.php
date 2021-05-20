
<?php session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/source4.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
    <title>Pizza | Janeiro</title>
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
            <h1 class="titre"> <a href=" #" class="cat">Nos Pizzas </a> </h1>
            <div class="grid-plants">
            
             <a href="" class="plant-box grid plant-grid1">
             
                 <div class="plant-bio">
                 
                     <h1 class="plant-name">Peperoni</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Peperoni">
                     <input  type="submit" name="add_to_cart" value="Commander">
                     </form>
                     <h3 class="plant-price">10DT</h3>
                     
                 </div>
                 
             </a>
            
             <a href="#" class="plant-box grid plant-grid2">
                 <div class="plant-bio">
                     <h1 class="plant-name">Ananas</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Ananas">
                     <input  type="submit" name="add_to_cart" value="Commander">
                     </form>
                     <h3 class="plant-price">16DT</h3>
                     
                 </div>
             </a>
             <a href="#" class="plant-box grid plant-grid3">
                 <div class="plant-bio">
                     <h1 class="plant-name">Neptune</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Neptune">
                     <input  type="submit" name="add_to_cart" value="Commander">
                     </form>
                     <h3 class="plant-price">8DT</h3>
                     
                 </div>
             </a>
             <a href="#" class="plant-box grid plant-grid4">
                 <div class="plant-bio">
                     <h1 class="plant-name">4 Fromages</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Fromage">
                     <input  type="submit" name="add_to_cart" value="Commander">
                     </form>
                     <h3 class="plant-price">13DT</h3>
                 </div>
             </a>
                
                
             <a href="#" class="plant-box grid plant-grid5">
                 <div class="plant-bio">
                     <h1 class="plant-name">4 Saisons</h1>
                     <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="4Saisons">
                     <input  type="submit" name="add_to_cart" value="Commander">
                     </form>
                     <h3 class="plant-price">13DT</h3>
                 </div>
                 <a href="#" class="plant-box grid plant-grid6">
                    <div class="plant-bio">
                        <h1 class="plant-name">Jambon</h1>
                        <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Jambon">
                     <input  type="submit" name="add_to_cart" value="Commander">
                     </form>
                        <h3 class="plant-price">12DT</h3>
                    </div>
                    <a href="#" class="plant-box grid plant-grid7">
                        <div class="plant-bio">
                            <h1 class="plant-name">Bresilienne</h1>
                            <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Bresilienne">
                     <input  type="submit" name="add_to_cart" value="Commander">
                     </form>
                            <h3 class="plant-price">20DT</h3>
                        </div>
                        <a href="#" class="plant-box grid plant-grid8">
                            <div class="plant-bio">
                                <h1 class="plant-name">Margheritta</h1>
                                <form action="php/ajouter.php" method="POST"class="adder">
                         <input type="hidden" name="name" value="Margheritta">
                     <input  type="submit" name="add_to_cart" value="Commander">
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