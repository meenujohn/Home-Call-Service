<?php  
 if(isset($_POST["sid"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost","root","","homeservice"); 
      $query = "SELECT * FROM addservice WHERE sid = '".$_POST["sid"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Service</label></td>  
                     <td width="70%">'.$row["service"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Description</label></td>  
                     <td width="70%">'.$row["description"].'</td>  
                </tr>  
               
                
                <tr>  
                     <td width="30%"><label>Price Details</label></td>  
                     <td width="70%">'.$row["pricedetails"].'</td>  
                </tr>  
                 <tr>  
                     <td width="30%"><label>General Instructions</label></td>  
                     <td width="70%">'.$row["instructions"].'</td>  
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