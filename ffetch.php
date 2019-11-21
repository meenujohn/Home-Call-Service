<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost","root","","homeservice");  
 if(isset($_POST["fid"]))  
 {  

      $query = "SELECT * FROM feedback WHERE fid = '".$_POST["fid"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>