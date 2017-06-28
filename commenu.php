<?php include('config.php');
?>

<?php
$sql="SELECT * FROM `categories`";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>

<div id='cssmenu' style="margin-top:10px">
<ul>
   <?php
	for($i=0;$i<$count;$i++)
	{
		$cat=mysql_result($result, $i,'name');
		$catid=mysql_result($result, $i,'id');
	?>

	<li><a href="<?php echo "menu.php?cat=".$catid;?>"><?php echo $cat;?></a></li>
	<?php
	}

	?></div>
</ul>
</div>
</body>
</html>

