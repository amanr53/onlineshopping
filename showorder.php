<?php include('session.php');
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>ShowOrders</title>

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
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div>
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<b>Categories</b> <b class="caret"></b>
</a>
<ul class="dropdown-menu">
	<?php
  $sql="SELECT * FROM categories";
  $result=mysql_query($sql);
  $count=mysql_num_rows($result);
	
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

if(isset($_GET['cat'])&&!empty($_GET['cat']))
{
	$incatid=$_GET['cat'];
	$sql="SELECT * from products WHERE `category_id`='$incatid'";
}
else
{
$sql="SELECT * from products";
}
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/image1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/image2.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/cronaldo.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/image5.jpg" alt="Flower">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
  <div class="col-lg-6">
  <table class="table">
  <thead>
  <tr>
  <h3><b>Order History</b></h3>
  <th>Product</th>
  <th>Price</th>
  </tr>
  </thead>
  <tbody>

  <?php
  $order=getfield(" ")."-orders";
  $sql="SELECT *from `$order`";
  $result=mysql_query($sql);
  $row=mysql_num_rows($result);
  


  for($i=0;$i<$row;$i++)
  {
  	$product=mysql_result($result, $i,'products');
  	$pro = explode(",", $product);
  	$price=mysql_result($result, $i,'price');
	  $pri = explode(",", $price);
  	$len = count($pro);
    if($len!=0)
    {
  	for($j=1;$j<$len;$j++) 
  	{
  	echo "<tr class='active'>";
  	echo "<td>$j.$pro[$j]</td>";
  	echo "<td>₹ $pri[$j]</td>";
    echo "<td></td>";
  	echo "</tr>";
  	$total+=$pri[$j];
  	}

  	echo "<tr class='success'>";
  	echo "<td><b>Order Id:".($i+1)."  Total Items:".($len-1)."</b></td>";
  	echo "<td><b>₹ $total</b></td>";
    $ordertime=mysql_result($result,$i,'ordertime');
    echo "<td><b>$ordertime</b></td>";
    echo "</tr>"; 
  }	
  }
  ?>
  </tbody>
  </table>
</div>
</div>
  <?php include('query.php');
  include('about-us.php');
  ?>
  </body>
  </html>
