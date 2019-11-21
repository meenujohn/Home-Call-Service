<?php
include "co.php";

$b=$_POST['id'];
 
$sql=mysqli_query($con,"update spreg set booked=1 where logid='$b'");
$sql=mysqli_query($con,"update spreg set booked=1 where logid='$b'");

if ( $sql){
echo "<script>alert('Add Serviceprovider');
      window.location='searchserviceprovider.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>