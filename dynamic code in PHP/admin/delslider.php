
<?php
include "dbcon.php";

	echo $id=$_GET['id'];

	$di="DELETE from slideri where id=$id";	
	mysqli_query($con,$di);

	$dp="DELETE from sliderp where id=$id";	
	mysqli_query($con,$dp);

	$db="DELETE from sliderb where id=$id";	
	mysqli_query($con,$db);

	$dc="DELETE from sliderc where id=$id";	
	mysqli_query($con,$dc);

	header('location:showslider.php');

?>
