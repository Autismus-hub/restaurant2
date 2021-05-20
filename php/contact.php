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
            <li class="main-nav"> <a class="main-link" href="acceuil.html">HOME</a> </li>
            
            <li class="main-nav "><a class="menu1" href="menu.html">MENU    
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
            <li class="main-nav"><a class="main-link" href="acceuil.html#location">WHERE TO FIND US</a></li>
            <li class="main-nav"><a class="main-link" href="#">CONTACT</a></li>
            <li class="main-nav"><a class="main-link" href="https://www.facebook.com/profile.php?id=100066502178786" target="_blank">FOLLOW US</a></li>
        </ul>
       
    </header>
    <div class="icone">
        <a href=""><i class="cart fas fa-shopping-cart"></i></a>
        <a href=""><i class="login fas fa-user"></i></a>
    </div>
    <div class="ecriture">
        <h1 class="locations">Contact Us</h2>
            <form method="POST" action="contact.php" id="contact-form">      
                <input name="name" type="text" class="feedback-input" placeholder="Name" />   
                <input name="email" type="text" class="feedback-input" placeholder="Email" />
                <textarea name="text" class="feedback-input" placeholder="Comment"></textarea>
                <input type="submit" value="SUBMIT"/>
              </form>
    </div>
</section>
<footer>
    <h2 class="copyright">
        &copy;2021 JANEIRO. ALL RIGHTS RESERVED. 
    </h2>
</footer>

</body>
</html>
<?php

if (isset($_POST['name'])) {
    $name= $_POST['name'];
    
    echo $name;

    $mailFrom= $_POST['email'];
    $message= $_POST['text'];
    
    $mailTo = "janeiro2308@gmail.com";
    $headers= "From: ".$mailFrom;
    $subject="Contact us";
    $txt="You have received an email from".$name.".\n\n".$message;


    
    mail($mailTo,$subject,$txt,$headers);

    header("Location: contact.php?emailsend");
    
}

?>