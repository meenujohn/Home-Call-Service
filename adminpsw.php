<?php

  include "co.php";

  $m="admin123";
  $p="Admin1234";
  $psw=md5($p);
  $sq="insert into login (username,password,usertype,status)values('$m','$psw',0,1) ";
  $qu=mysqli_query($con,$sq);
  if($qu)
  {
  	echo "Success";
  }
  else
  {
  	echo $con->error;
  }
?>