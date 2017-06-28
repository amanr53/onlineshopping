<?php include('config.php');

$sql="SELECT title,image,description from products";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
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
    
    <title>Products</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	  <link href="styles.css" type="text/css" rel="stylesheet">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	  <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
	  <script type="text/javascript" src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
	  <script src = "https://maps.googleapis.com/maps/api/js"></script>
	  <script scr="materialize/js/materialize.min.js"></script>
</head>

<body>
<div class="container">
      <!-- Example row of columns -->
      	<div class="thumbnail">
        		
        <?php
						
				for($i=0;$i<$count;$i++)
				{
					if ($i%3==0)
        		{
              echo "<div class='row'>";
            }
            	echo "<div class='col-sm-6 col-md-4'>";
					
          $title=mysql_result($result, $i,'title');
					echo "<b>$cat</b>";
				
				  $image=mysql_result($result, $i,'image');
				  $path="image/";
				
				?>

          	<img src="<?php echo $path.$image;?>" class="img-thumbnail" style="width:300px;height:300px">
            <div class="caption">
         	<?php

				  $desc=mysql_result($result, $i,'description');
          ?><h3><center><?php echo $title;?></center></h3>
          <?php echo $desc;?>
         	
         	
         	<?php
            echo "</div>";
            echo "</div>";
    		    if ($i%3 == 2)
        	   echo "</div>";
          	}
          	?>
        </div>
        </div>
        
    </div>
<?php include('about-us.php');?>
</body>
</html>



