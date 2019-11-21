<?php  
 if(isset($_POST["fid"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost","root","","homeservice"); 
      $query = "SELECT * FROM feedback WHERE fid = '".$_POST["fid"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Emailid</label></td>  
                     <td width="70%">'.$row["username"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Feedback</label></td>  
                     <td width="70%">'.$row["feedback"].'</td>  
                </tr>  
               
                
               
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
      }  
 ?>