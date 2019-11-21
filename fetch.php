<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost","root","","homeservice");  
 if(isset($_POST["sid"]))  
 {  
      $query = "SELECT * FROM addservice WHERE sid = '".$_POST["sid"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>