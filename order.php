<?php ob_start();
include('session.php');
$arrtitle=$_POST['arrtitle'];
$arrprice=$_POST['arrprice'];
$arrtp=$_POST['arrtp'];
$ordertime=$_POST['ordertime'];
$order=getfield(" ")."-orders";
$sql1=mysql_query("SELECT NOW()");
$result1=mysql_result($sql1,0);

$sql="INSERT INTO `$order` (`products`,`price`,`totalPrice`,`ordertime`) VALUES ('$arrtitle','$arrprice','$arrtp','$result1')";
$result=mysql_query($sql);
$tablename=getfield(" ")."-cart";
$sql="DELETE FROM `$tablename`";
$result=mysql_query($sql);
header("location:showorder.php");
?>