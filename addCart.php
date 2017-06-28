<?php
require('session.php');

if(isset($_POST['pid'])&& !empty($_POST['pid']))
{
$pid=$_POST['pid'];
$quantity=$_POST['quantity'];
$tablename=getfield($pid);
$tablename=$tablename."-cart";
//echo $tablename;
$quantity=$quantity-1;
$update="UPDATE `products` SET `quantity`='$quantity' WHERE `id`='$pid'";
$result=mysql_query($update);

$insert="INSERT INTO `$tablename` (`id`) VALUES ('$pid')";
//echo $insert;	
$result=mysql_query($insert);
header("location:menu.php");
}
else
{
	header("location:menu.php");
}
?>
