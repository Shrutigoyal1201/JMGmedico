
<?php
include "dbcon.php";

	echo $id=$_GET['id'];

	$dh="DELETE from abouth where id=$id";	
	mysqli_query($con,$dh);

	$dt="DELETE from aboutteam where id=$id";	
	mysqli_query($con,$dt);

	$dl="DELETE from aboutloc where id=$id";	
	mysqli_query($con,$dl);

	$df="DELETE from aboutf where id=$id";	
	mysqli_query($con,$df);

	header('location:showabout.php');

?>
