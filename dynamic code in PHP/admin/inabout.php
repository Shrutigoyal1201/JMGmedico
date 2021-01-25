<?php

include "dbcon.php";

if(isset($_POST['submith']))
{

	echo $t=$_POST['title'];
	echo $d=$_POST['des'];
	echo $fn=$_FILES['image']['name'];
	echo $tn=$_FILES['image']['tmp_name'];

	$i="upload/".$fn;
	move_uploaded_file($tn, $i);


	$inh="INSERT INTO abouth(title,des,image)values('$t','$d','$i')";

	$query=mysqli_query($con,$inh);

	if($query)
	{
		echo "<script>alert('Data inserted successfully')</script>";
	}
	else
	{
		echo "<script>alert('Sorry! Data not inserted')</script>";
	}

}

if(isset($_POST['submitteam']))
{
	echo $t=$_POST['title'];
	echo $s=$_POST['subtitle'];
	echo $d=$_POST['des'];
	echo $sd=$_POST['subdes'];
	echo $fn=$_FILES['image']['name'];
	echo $tn=$_FILES['image']['tmp_name'];

	$i="upload/".$fn;
	move_uploaded_file($tn, $i);

	$int="INSERT INTO aboutteam(title,subtitle,des,subdes,image)values('$t','$s','$d','$sd','$i')";

	$query=mysqli_query($con,$int);

	if($query)
	{
		echo "<script>alert('Data inserted successfully')</script>";
	}
	else
	{
		echo "<script>alert('Sorry! Data not inserted')</script>";
	}
}


if(isset($_POST['submitloc']))
{

	echo $t=$_POST['title'];
	echo $d=$_POST['des'];

	$inl="INSERT INTO aboutloc(title,des)values('$t','$d')";

	$query=mysqli_query($con,$inl);
	if($query)
	{
		echo "<script>alert('Data inserted successfully')</script>";
	}
	else
	{
		echo "<script>alert('Sorry! Data not inserted')</script>";
	}
}

if(isset($_POST['submitf']))
{
	echo $t=$_POST['title'];
	echo $d=$_POST['des'];
	echo $fn=$_FILES['image']['name'];
	echo $tn=$_FILES['image']['tmp_name'];

	$i="upload/".$fn;
	move_uploaded_file($tn, $i);

	$inf="INSERT INTO aboutf(title,des,image)values('$t','$d','$i')";

	$query=mysqli_query($con,$inf);if($query)
	{
		echo "<script>alert('Data inserted successfully')</script>";
	}
	else
	{
		echo "<script>alert('Sorry! Data not inserted')</script>";
	}
}


?>