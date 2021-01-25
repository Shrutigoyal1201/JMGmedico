
<?php
include "dbcon.php";

echo $id=$_GET['id'];
$d="DELETE from contact where id=$id";	
mysqli_query($con,$d);
header('location:contactform.php');

?>
