<?php  
 $connect = mysqli_connect("localhost","root","","homeservice");   
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $service= mysqli_real_escape_string($connect, $_POST["service"]);  
      $description = mysqli_real_escape_string($connect, $_POST["des"]);  
      $pricedetails = mysqli_real_escape_string($connect, $_POST["price"]);  
      $instructions = mysqli_real_escape_string($connect, $_POST["instructions"]);  
      if($_POST["sid"] != '')  
      {  
           $query = "  
           UPDATE addservice   
           SET service='$service',   
           description='$description',    
           pricedetails = '$pricedetails', 
            instructions = '$instructions'  
           WHERE sid='".$_POST["sid"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO addservice(service, description, pricedetails,instructions)  
           VALUES('$service','$description','$pricedetails','$instructions');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM addservice ";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                     <tr>  
                          <th width="70%">Service</th>  
                          <th width="15%">Edit</th>  
                          <th width="15%">View</th>  
                     </tr>  
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["service"] . '</td> 
                          <td><input type="button" name="edit" value="Edit" id="'.$row["sid"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["sid"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 

