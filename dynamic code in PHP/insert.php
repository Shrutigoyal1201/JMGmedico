<?php

include "dbcon.php";

if(isset($_POST['submit']))
{
	$n=$_POST['name'];
	$e=$_POST['email'];
	$p=$_POST['phone'];
	$pr=$_POST['product'];

	$data="INSERT INTO contact(name,email,phone,product)values('$n','$e','$p','$pr')";

	$query=mysqli_query($con,$data);
	if($query)
	{
		echo "<script> alert('Your request has been submited')</script>";
	}
	else
	{
		echo "<script> alert('Sorry!! could not submit your request. Please enter the details again.') </script> ";
	}
}


?>
