<?php
include "co.php";

$b=$_POST['id'];
 
$sql=mysqli_query($con,"update spreg set status=1 where logid='$b'");
$sqll=mysqli_query($con,"update login set status=1 where logid='$b'");
if ( $sql && $sqll ){
echo "<script>alert('Approved');
      window.location='spaproval.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>