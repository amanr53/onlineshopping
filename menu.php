<?php include('session.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Products</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="styles.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	<script src = "https://maps.googleapis.com/maps/api/js"></script>
	<script scr="materialize/js/materialize.min.js"></script>
</head>


<?php 

$username=getfield('username');
$tablename=$username."-cart";

$sql="SELECT * from `$tablename`";
$result=mysql_query($sql);
$row=mysql_num_rows($result);

if($row==0)
{
$tablecreate="CREATE TABLE `$tablename` (`pid` integer,`time` TIMESTAMP )";
$result=mysql_query($tablecreate);
}


$sql="SELECT * FROM categories";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>

<body background="black" onload="loadMap()">
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
<li><a href="menu.php"><?php echo $user_check;?></a></li>
<li class="pull-center"><a href="cart.php">CheckOut</a></li>
</ul>
</div>
</nav>

<?php include('commenu.php');?>

<?php 

if(isset($_GET['cat'])&&!empty($_GET['cat']))
{
	$incatid=$_GET['cat'];
	$sql="SELECT * from products WHERE `category_id`='$incatid'";
}
else
{
$sql="SELECT * from products WHERE `quantity`>0";
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
      <img src="images/moto360.jpg" alt="Flower">
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


<div class="container" style="margin-top:2%">
      <!-- Example row of columns -->
      	
        		
        <?php
				$count1=0;

				for($i=0;$i<$count;$i++)
				{

					if (($i)%3==0)
        		{
              echo "<div class='row'>";
            }
            	
          $title=mysql_result($result, $i,'title');
					$image=mysql_result($result, $i,'image');
				  $path="image/";
				  $price=mysql_result($result, $i,'price');
          $quantity=mysql_result($result, $i,'quantity');
          
          if($quantity>0)
          {
          $count1++;
				  $image=$path.$image;
          echo "<div class='col-sm-6 col-md-4'>";
          echo "<div class='thumbnail thumback'>";
          
          echo "<img src='$image' class='img-thumbnail img-responsive grow' style='width:300px;height:300px'>";
          echo  "<div class='caption'>";
         	
          $desc=mysql_result($result, $i,'description');
				  $pid=mysql_result($result, $i,'id');
          
          echo  "<h3><center>$title</center></h3>";
          echo $desc;
          echo "</div>";
          
          echo "<form action='addCart.php' method='POST'>";
          echo "<input type='text' value='$tablename' name='tablename' class='hidden'>";
          echo "<input type='text' value='$pid' name='pid' class='hidden'>";
          echo "<input type='text' value='$quantity' name='quantity' class='hidden'>";
          echo "<hr><center><b class='pull-center'>₹ $price</center></b><hr>";
          echo "<input class='btn btn-success center-block' type='submit' value='Add to cart'/></form><br>";
          
          
          echo "</div>";
          echo "</div>";
          }
    		 
          if (($i)%3 == 2)
        	   {
              echo "</div>";
             }
          }
          	?>
        
        </div>
        
    </div>
<?php
$sql="SELECT *FROM `categories`";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>

<?php include('query.php');?>
<?php include('about-us.php');?>

</body>
</html>




