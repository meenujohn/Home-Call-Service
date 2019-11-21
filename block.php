<?php
include "co.php";

$b=$_POST['id'];
 
$sql=mysqli_query($con,"update creg set status=0 where logid='$b'");
$sqll=mysqli_query($con,"update login set status=0 where logid='$b'");
if ( $sql && $sqll ){
echo "<script>alert('Blocked');
      window.location='viewcustomer.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>