<?php
   include('config.php');
   session_start();
   
   $user_check=$_SESSION['login_user'];

   function getfield($var)
   {
   $user_check=$_SESSION['login_user'];
   return $user_check;	
   }
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>