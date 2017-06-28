<?php require('session.php');
  ?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>CheckOut</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="styles.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <script src = "https://maps.googleapis.com/maps/api/js"></script>
    <script scr="materialize/js/materialize.min.js"></script>
</head>
<body>

<?php
$sql="SELECT * FROM categories";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div>
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<b>Categories</b> <b class="caret"></b>
</a>
<ul class="dropdown-menu">
  <?php
  for($i=0;$i<$count;$i++)
  {
    $cat=mysql_result($result, $i,'name');
    $catid=mysql_result($result, $i,'id');
  ?>

  <li><a href="<?php echo "menu.php?cat=".$catid;?>" style="margin-left:10%"><?php echo $cat;?></a></li>
  <?php
  }

  ?>

</ul>
<li><a href="logout.php">Logout</a></li>
<li><a href="#"><?php echo $user_check;?></a></li>
<li class="pull-center"><a href="cart.php">CheckOut</a></li>
</ul>
</div>
</nav>

  <?php
  $tablename=getfield(" ")."-cart";
  $sql="SELECT `id` from `$tablename`";
  $result=mysql_query($sql);
  
  $count=mysql_num_rows($result);
  ?>
  

<?php

  if($count==0)
  {
  ?><div class="container" style="margin:50px"><h3>No Items in the Cart</h3></div><?php
}
  else
  {
  echo '<div class="container">';
  echo '<div class="col-lg-6">';
  echo  '<table class="table">';
  echo  '<thead>';
  echo  '<tr>';
  echo '<th>Product</th>';
  echo '<th>Price</th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
    
  for($i=0;$i<$count;$i++)
  {
    $pid=mysql_result($result, $i,'id');
    
    $sql="SELECT * from `products` WHERE `id`='$pid'";
    
    $query=mysql_query($sql);
    $title=mysql_result($query,0,'title');
    $price=mysql_result($query,0,'price');
    
    $arrtitle=$arrtitle.",".$title;
    $arrprice=$arrprice.",".$price;
    
    echo "<tr class='active'>";
    echo "<td>".($i+1).".$title</td>";
    echo "<td>₹ $price</td>";
    echo "</tr>";
    $total+=$price;
  }
  echo "<tr class='success'>";
  echo "<td><b>".$count.".Total Items</b></td>";
  echo "<td><b>₹ $total</b></td>";
  echo "</tr>";
  } 
    ?>
  </tbody>
</table>
<?php
if($count!=0)
{
?><form action="order.php" method="POST">
<input type="text" value="<?php echo $arrtitle;?>" name="arrtitle" class="hidden">
<input type="text" value="<?php echo $arrprice;?>" name="arrprice" class="hidden">
<input type="text" value="<?php echo $total;?>" name="arrtp" class="hidden">
<input class="btn btn-warning btn-md center-block" type="submit" value="Place Order"/>
</form>
<?php 
}
?>
</div>
</div>

<?php include('query.php');
include('about-us.php');
?>

</body>
</html>