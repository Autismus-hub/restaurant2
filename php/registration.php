<?php
 session_start();
include('connection.php'); 
if (isset($_POST['sign']) ){
            $username=$_POST['name'];
            $password=$_POST['password'];
            $mail=$_POST['mail'];
            $date=$_POST['date'];


        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  

            $user_check_query = "SELECT * FROM user WHERE email='$mail'";
            $result = mysqli_query($con, $user_check_query);
            $user = mysqli_fetch_assoc($result);
            $count=mysqli_num_rows($result);
           
            
                
                if ($count==1) {
                  echo "<h2> email already exists </h2>";
                }
            
            // Finally, register user if there are no errors in the form
            if ($count == 0) {
                session_start();
                $password = md5($password);//encrypt the password before saving in the database
                
                $query = "INSERT INTO user (Name,Birthdate, Email, Password, ADMIN) 
                          VALUES('$username','$date' ,'$mail', '$password', 'FALSE')";
                $query2="INSERT INTO login (mail, Password) 
                VALUES('$mail', '$password')";

                mysqli_query($con, $query);
                mysqli_query($con,$query2);
                
                header('location: ../acceuil.php');
                
            }

        }

        ?>