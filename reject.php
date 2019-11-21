<?php
include "co.php";

$b=$_POST['id'];
$sql=mysqli_query($con,"update spreg set status=2 where logid='$b'");
$sqll=mysqli_query($con,"delete from login where logid='$b'");
if ( $sql && $sqll ){
 echo "<script>alert('Removed');
      window.location='spaproval.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>