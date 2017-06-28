<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form 
      $myname=$_POST['name'];
      $myusername=$_POST['username'];
      $mypassword=$_POST['password'];
      if($mypassword==$myrepassword)
      echo "same password";
      $myemail=$_POST['email'];
      $myrepassword=$_POST['repassword'];  
      $myphone=$_POST['phone'];  
      


      $sql="SELECT * FROM users WHERE email='$myemail'";
      $result=mysql_query($sql);
      $row=mysql_fetch_array($result);
      $active=$row['active'];
      
      $count=mysql_num_rows($result);
      
      

		
      if($count==0)
      {
         session_register("myusername");
         $_SESSION['login_user']=$myusername;
         $sql="INSERT INTO users (first_name,username,password,email,phone) VALUES ('$myname','$myusername','$mypassword','$myemail','$myphone')";
         $result=mysql_query($sql);
         $tablename=$myusername."-cart";
         $sql="CREATE TABLE `$tablename`(id integer(11))";
         $result=mysql_query($sql);
      $tablename=$myusername."-orders";

      $sql="CREATE TABLE  `$tablename` (`order_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,`products` VARCHAR( 10000 ) NOT NULL ,`price` VARCHAR( 10000 ) NOT NULL ,`totalPrice` INT NOT NULL,`ordertime` TIMESTAMP) ";
      $result=mysql_query($sql);

      header("location:login.php");   

      }
      else 
      {
         $error="Registered Email Id exsists";
         header("location: register.php");
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

      
    
  </head>

  <body>

    <div class="container" >

<form class="form-signin" method="post">
        <h2 class="form-signin-heading">Please Register</h2>
        <label for="Name" class="sr-only">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name" required autofocus validate>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus validate>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required validate>
        <label for="email" class="sr-only">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Email" required validate>
        <label for="Phone" class="sr-only">Email</label>
        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
      </form>
 </div> <!-- /container -->


    
    
  </body>
</html>
