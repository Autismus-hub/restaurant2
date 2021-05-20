<?php
     session_start();  
    
    include('connection.php');  
    if (isset($_POST['login'])) {
    $username = $_POST['text'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
        $password=md5($password);
        $sql = "select * from user where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row=mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           
            $_SESSION['text']= true;
            $_SESSION['user']= $username;
            if ($row['ADMIN']==1) {
                header('location:../ADMIN.php');
            }
            else {
            header('location: ../acceuil.php');
            }
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }
        }  
   


     
?>
