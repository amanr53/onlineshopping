<?php include('config.php');
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="INSERT INTO `feedback` VALUES ('$name','$phone','$email','$message')";
$result=mysql_query($sql);
header("location:menu.php");
?>