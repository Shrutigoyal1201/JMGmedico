<?php

include "dbcon.php";

if(isset($_POST['submiti']))
{
	echo $fn=$_FILES['image']['name'];
	echo $tn=$_FILES['image']['tmp_name'];

	$i="upload/".$fn;
	move_uploaded_file($tn, $i);

	echo $t=$_POST['title'];
	echo $d=$_POST['des'];

	$in="INSERT INTO slideri(image,title,des)values('$i','$t','$d')";

	mysqli_query($con,$in);
}

if(isset($_POST['submitp']))
{

	echo $fn=$_FILES['image']['name'];
	echo $tn=$_FILES['image']['tmp_name'];

	$i="upload/".$fn;
	move_uploaded_file($tn, $i);

	$in="INSERT INTO sliderp(image)values('$i')";

	mysqli_query($con,$in);
}


if(isset($_POST['submitb']))
{

	echo $fn=$_FILES['image']['name'];
	echo $tn=$_FILES['image']['tmp_name'];

	$i="upload/".$fn;
	move_uploaded_file($tn, $i);

	$in="INSERT INTO sliderb(image)values('$i')";

	mysqli_query($con,$in);
}

if(isset($_POST['submitc']))
{

	echo $fn=$_FILES['image']['name'];
	echo $tn=$_FILES['image']['tmp_name'];

	$i="upload/".$fn;
	move_uploaded_file($tn, $i);

	$in="INSERT INTO sliderc(image)values('$i')";

	mysqli_query($con,$in);
}


?>