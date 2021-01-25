<?php

include"dbcon.php";

if(isset($_POST['submit']))
{

	echo $n=$_POST['name'];
	echo $e=$_POST['email'];
	echo $ph=$_POST['phone'];
	echo $p=$_POST['product'];

	$i="INSERT INTO contact(name,email,phone,product)values('$n','$e','$ph','$p')";
	$q=mysqli_query($con,$i);
}