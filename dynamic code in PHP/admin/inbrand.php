<?php

include "dbcon.php";

if(isset($_POST['submiti']))
{
	echo $fn=$_FILES['image']['name'];
	echo $tn=$_FILES['image']['tmp_name'];

	$i="upload/".$fn;
	move_uploaded_file($tn, $i);


	$in="INSERT INTO brandimg(image)values('$i')";

	$query=mysqli_query($con,$in);

	if($query)
	{
		echo "<script>alert('Data inserted successfully')</script>";
		header('location:addbrand.php');
	}
	else
	{
		echo "<script>alert('Sorry! Data not inserted')</script>";
	}

}


if(isset($_POST['submitl']))
{
	echo $n=$_POST['name'];

	$in="INSERT INTO brandname(name)values('$n')";

	$query=mysqli_query($con,$in);

	if($query)
	{
		echo "<script>alert('Data inserted successfully')</script>";
		header('location:addbrand.php');
	}
	else
	{
		echo "<script>alert('Sorry! Data not inserted')</script>";
	}

}

?>