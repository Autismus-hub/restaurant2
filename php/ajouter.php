<?php
session_start(); 
require('connection.php') ;

if(isset($_POST['add_to_cart']))

{
    if(!isset($_SESSION['text'])){
    header('location:../login.php');
}
$name=$_POST['name'];

$rescheck = mysqli_query($con,"select * from `produit` where name = '$name'");

$sql= "select * from panier where name= '$name'";
$query =mysqli_query($con,$sql);


   $row=mysqli_fetch_assoc($rescheck);
    $name2=$row['Name'];
    
    $id=$row['ID'];
    $image=$row['IMAGE'];
    $prix=$row['Prix'];
    $maile=$_SESSION['user'];
    $query2=mysqli_query($con,"Select * from `user` where Email='$maile' ");
    $row2=mysqli_fetch_assoc($query2);
    $id2=$row2['ID'];
    $nom=$row2['Name'];
    $sql= "INSERT INTO panier values('$id','$name2','$image','$prix','1','NULL','$id2','$nom')";
    
    
    if (mysqli_query($con, $sql)) {
        echo '<script>alert("added successfully ")</script>';
       
        header("location: ../panier.php");
        
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($con);
        
    }
}


?>