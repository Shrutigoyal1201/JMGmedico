
<?php
include "dbcon.php";

echo $id=$_GET['id'];
$di="DELETE from brandimg where id=$id";	
mysqli_query($con,$d);

$dn="DELETE from brandname where id=$id";	
mysqli_query($con,$dn);

header('location:showbrand.php');

?>
