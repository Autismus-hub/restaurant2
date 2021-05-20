<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Janeiro</title>
    <link rel="stylesheet" href="css/source11.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css%22%3E">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
</head>
<body>

<?php
session_start();
  include('php/connection.php');  
  $maile=$_SESSION['user'];
    $query2=mysqli_query($con,"Select ID from `user` where Email='$maile' ");
    $row3=mysqli_fetch_assoc($query2);
    $userid2=$row3['ID'];
$req = "select * from Panier where userid='$userid2'";
$res = mysqli_query($con,$req);

//php delete button 
if(isset($_GET['delete'])){
    $name = $_GET['delete'];
   
    $rem = "delete from panier where Panier ='$name'";
    mysqli_query($con,$rem);
    //to return to the current web page
    header("location: panier.php");
}
?>



<section class="toppage">
   
    <header>
        <img class="logo" src="img/logo.png" alt="">
        <ul class="nav-links">
            <li class="main-nav"> <a class="main-link" href="acceuil.php">HOME</a> </li>
            
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
            <li class="main-nav"><a class="main-link" href="acceuil.php#location">WHERE TO FIND US</a></li>
            <li class="main-nav"><a class="main-link" href="contact.php">CONTACT</a></li>
            <li class="main-nav"><a class="main-link" href="https://www.facebook.com/profile.php?id=100066502178786" target="_blank">FOLLOW US</a></li>
        </ul>
       
    </header>
    <div class="icone">
    <?php
    if (isset($_SESSION['text'])): { ?>
        <a href="panier.php"><i class="cart fas fa-shopping-cart"></i></a>
        <a href="php/logout.php"><i class="login fas fa-sign-out-alt"></i></a>
<?php  } 
else: { ?>
            <a href="login.php"><i class="cart fas fa-shopping-cart"></i></a>
            <a href="login.php"><i class="login fas fa-sign-in-alt"></i></a>
            <?php } endif;


 ?>
  
</section>
<section class="middle">
<h1 class="titre"> <a href=" #" class="cat">Produits commandés </a> </h1>

<table >
    <tr style="color: white;">
        <td>Nom </td>
        <td>Produit</td>
        <td>Prix</td>
       

        
 
    </tr>
    <?php 
    $total =0;
      if(mysqli_num_rows($res)>0)
        {while($row = mysqli_fetch_array($res)){ ?>
    <tr>
        <td> <?php echo $row['Name'] ;?> </td>
        <?php
        $name=$row['Name'];
        
    $sql="select * from produit where name='$name'";
        $query=mysqli_query($con,$sql);
        $row2=mysqli_fetch_assoc($query);
        ?>
        <td> <?php echo '<img src="'.$row2['IMAGE'].' " class="imagetab"  />' ;?></td>
        <td> <?php echo  $row['Prix'] ;?></td>
       
        <td><a href="panier.php?delete=<?php echo $row["Panier"]; ?>"><i class="fas fa-trash"></i></a></td>  
    </tr>

    <?php 
        $total += $row['Prix'];
        
        }?>
        <tr>
    <td colspan="2" align="right">Total</td>
    <td align ="right"> <?php echo number_format($total,2);?> DT</td>
    </tr>
    <?php
    }
    else  {
        ?>
        <td colspan="4" align="center">You haven't added anything yet <a href="menu.php"><i class="fas fa-cart-plus"></i> </a></td>
        <?php
    }
    
  ?>
</table>
</section>

<footer>
        <h5>Rue Abourraihan Al Bayrouni, Ariana
        </h5>
        <h5 class="copyright">
            &copy;2021 JANEIRO. ALL RIGHTS RESERVED. 
        </h5>
        <br>
    </footer>
</body>
</html>