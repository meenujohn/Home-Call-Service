<!--Author: W3layouts
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
   <?php
 include 'co.php';
 
 $q1="select * from addservice";
 $sql1=mysqli_query($con,$q1);
 $q="select * from district";
 $sql=mysqli_query($con,$q);
 ?>
<!DOCTYPE HTML>
<html lang="zxx">
   <head>
      <title>Item Order Form Responsive Widget Template :: w3layouts</title>
      <!-- Meta tag Keywords -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8" />
      <meta name="keywords" content="Item Order Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
         />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!-- Meta tag Keywords -->
      <!-- css files -->
      <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
      <!-- Style-CSS -->
      <!-- Font-Awesome-Icons-CSS -->
      <!-- //css files -->
      <!-- web-fonts -->
      <link href="//fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet">
      <!-- //web-fonts -->
   </head>
   <body>
      <!-- title -->
      <h1 class="header-w3ls">Serviceprovider Registration</h1>
      <!-- //title -->
      <!-- content -->
      <div class="porduct-order-agile">
         <form action="index.php" name="registration" method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <p>Name</p>
               <input type="text" name="name" id="name" placeholder="name"  required="">
              
          
          </script>
            </div>
            <div class="form-group">
               <p>Phone </p>
               <input type="text" placeholder="phone" name="phone" id="name" onChange="return validateform2()" required="">
               <script>
        function validateform2()
        {
          if( document.registration.phone.value == "" ||
           isNaN( document.registration.phone.value) ||
           document.registration.phone.value.length != 10 )
   {
     alert( "Please provide a 10 digit mobile no" );
     document.registration.phone.focus() ;
     return false;
   }
   if((document.registration.phone.value.charAt(0)!=9) && 
    (document.registration.phone.value.charAt(0)!=8) && 
    (document.registration.phone.value.charAt(0)!=7))
   {
alert( "Please provide a valid 10 digit mobile no. start with '9' or '8' or'7'" );
     document.registration.phone.focus() ;
     return false;
   }
    return true ;  
     }
        </script>
            </div>
            <div class="form-group">
               <p>Email</p>
               <input type="text" name="email" id="email" placeholder="email"onChange="return validateform3()" required="">
               <script>
                      function validateform3()
        {
var email = /^([a-z0-9A-Z_\.\-])+\@(([a-zA-Z\-])+\.)+([a-zA-Z]{2,4})+$/;
var c=document.registration.email.value;
 if(c==null || c=="")
     {
     alert("email can't be empty");
     return false;
     }
    if (!email.test(document.registration.email.value)) {
    alert('Please provide a valid email id');
    document.registration.email.focus();
    return false;
 } 
 return true;
  }                 </script>
            </div>
            <div class="form-group">
               <p>House Name </p>
               <input type="text" placeholder="housename" name="hname" id="hname" required="" onChange="return validateform4()">
               <script>
          function validateform4()
          {
var x=document.forms["registration"]["hname"].value;
if(x=="")
{
alert("Please Fill housename");
document.getElementById("hname").focus();
return false;
}
var x=new RegExp("^[a-zA-z ]*$");
if(!x.test(document.registration.hname.value))
{
  alert("Enter housename with characters only");
  registration.hname.focus();
  document.getElementById("hname").value="";
  return false;
}
var x=document.forms["registration"]["hname"].value;
if(x.length<2 || x.length>30)
{
alert("Please enter housename with more than 2 letters and less than 30 letters");
document.getElementById("hname").focus();
document.getElementById("hname").value="";
return false;
}
return true;
      }
          
          </script>
            </div>
            <div class="main">
               <div class="form-left-to-w3l">
                  <p>Gender</p>
                  <select  name="gender" style="width: 100% ; height: 35px ; border: 1px solid #000;" required="">
                    <option value="">---- SELECT ----</option>
                    <option value="male">male</option>
                    <option value="female">female</option></select>

                  <div class="clear"></div>
               </div>
               <div class="form-left-to-w3l">
                  <p>Dob</p>
                  <input type="date" name="date" id="date" placeholder="username" style="width: 100% ; height: 35px ; border: 1px solid #000;" required=""  min="1970-01-01" max="2001-12-31">
                              
                </script>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="main">
               
               <div class="form-left-to-w3l">
                  <p>Service Category</p>
                  
                  <select  name="service" style="width: 100% ; height: 35px ; border: 1px solid #000;" required="">
                     <option value="">---- SELECT ----</option>
                        <?php
                                  while($fetch=mysqli_fetch_array($sql1))
                              {
                                       ?>
                                        <option value="<?php echo $fetch['sid']?>"><?php echo $fetch['service']?>  <?php
                                    }
                                  ?>
                        
                     </select>
               </div>
               <div class="form-left-to-w3l">
                  <p>Id Proof</p>
               <input type="file" name="file" id="file" placeholder="file" required="" onChange="return validateform5()">
               <script>
                function validateform5()
                {
               var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Please upload file having extensions .jpeg/.jpg/.png/only.');
        fileInput.value = '';
        return false;
      }
      return true;
    }
    </script>
               </div>
            </div>
            <div class="main">
               
               <div class="form-left-to-w3l">
                  <p>District</p>
                  
                  <select  name="dis" style="width: 100% ; height: 35px ; border: 1px solid #000;" required="" >
                     <option value="">---- SELECT ----</option>
                        <?php
                                  while($fetch=mysqli_fetch_array($sql))
                              {
                                       ?>
                                        <option value="<?php echo $fetch['disid']?>"><?php echo $fetch['disname']?>  <?php
                                    }
                                  ?>
                        
                     </select>
               </div>
               <div class="form-left-to-w3l">
                  <p>City</p>
                  <input type="text" name="city" id="city" placeholder="city" required="" onChange="return validateform6()">
                  <script>
          function validateform6()
          {
var x=document.forms["registration"]["city"].value;
if(x=="")
{
alert("Please Fill City");
document.getElementById("city").focus();
return false;
}
var x=new RegExp("^[a-zA-z ]*$");
if(!x.test(document.registration.city.value))
{
  alert("Enter City with characters only");
  registration.city.focus();
  document.getElementById("city").value="";
  return false;
}
var x=document.forms["registration"]["city"].value;
if(x.length<2 || x.length>30)
{
alert("Please enter city with more than 2 letters and less than 30 letters");
document.getElementById("city").focus();
document.getElementById("city").value="";
return false;
}
return true;
      }
          
          </script>
               </div>
            </div>
            <div class="main">
               <div class="form-left-to-w3l">
                  <p>Pincode</p>
                  <input type="text" name="pin" id="pin" placeholder="pincode" required="" onChange="return validateform7()">
                  <script>
                  function validateform7()
        {
          if( document.registration.pin.value == "" ||
            isNaN( document.registration.pin.value) ||
           document.registration.pin.value.length != 6 )
   {
     alert( "Please provide a 6 digit pin code" );
     document.registration.pin.focus() ;
     return false;
   }
   return true;
 }

 </script>
                  <div class="clear"></div>
               </div>
               <div class="form-left-to-w3l">
                  <p>Username</p>
                  <input type="text" name="uname" id="uname" placeholder="username" onChange="return validateform8()" >
                   <script>
        function validateform8()
        {
        var x=document.forms["registration"]["uname"].value;


if(document.registration.uname.value.length<6)
{
  alert("Enter username with more than six characters");
  document.getElementById("uname").focus();
  document.getElementById("uname").value="";
  return false;
} 
return true;
        }
        </script>
                  <div class="clear"></div>
               </div>
            </div>
            <div class="main">

               <div class="form-left-to-w3l">
                  <p>Password</p>
                  
                  <input type="password" name="pwd" id="pwd" placeholder=" password" style="width: 100% ; height: 30px ; border: 1px solid #000;"onChange="return validateform9()">
                  <script>
        function validateform9()
        {
          var x=document.forms["registration"]["pwd"].value;

if(document.registration.pwd.value.length<8)
{
  alert("Password should be minimum 8 characters long");
  document.getElementById("pwd").focus();
  document.getElementById("pwd").value="";
  return false;
}
re = /[0-9]/;
      if(!re.test(registration.pwd.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        registration.pwd.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(registration.pwd.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        registration.pwd.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(registration.pwd.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        registration.pwd.focus();
        return false;
      }
var passw=  /^[A-Za-z]\w{7,14}$/;
if(document.registration.pwd.value.match(passw))
{
  
} 
else
{ 
alert('Password must contain numbers,characters,underscore and first letter as character');
document.getElementById("pwd").focus();
document.getElementById("pwd").value="";
return false;
}
return true;
        }
        </script>
                  <div class="clear"></div>
                  </div>
            <div class="form-left-to-w3l">
            <p>Confirm Password</p>
                  <input type="password" name="cpass" id="cpass" placeholder="confirm password" style="width: 100% ; height: 30px ; border: 1px solid #000;" required="" onChange="return validateform10()">
                  <script>
        function validateform10()
        {
          

var pwd=document.getElementById("pwd").value;
var cpwd=document.getElementById("cpass").value;
if(pwd!=cpwd){
       alert("Password not matching");
     document.getElementById("cpass").focus(); 
         document.getElementById("cpass").value="";    
     return false;
}
return true;
        }
        </script>
                  <div class="clear"></div>
                  </div>
               </div>

        
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
         </form>
      </div>
      <!-- copyright -->
      
      <!-- //copyright -->
   </body>
</html>
<?php
include 'co.php';
 if(isset($_POST['submit']))
{
$a=$_POST['name'];
$b=$_POST['phone'];
$c=$_POST['gender'];
$d=$_POST['date'];
$e=$_POST['dis'];
$f=$_POST['city'];
$g=$_POST['pin'];
$h=$_POST['service'];
$l=$_POST['email'];
$m=$_POST['hname'];
$i=$_POST['uname'];
$j=$_POST['pwd'];
//$p=$_POST['file'];
$k=md5($j);
$img=$_FILES["file"]["name"];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$image=$target_file;

$sql="select * from login where username='$i'";
$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount==0)
{
$sq="insert into login(username,password,usertype,status)values('$i','$k',2,0)";
if(mysqli_query($con,$sq))
{
 $s=mysqli_query($con,"select logid from login where username='$i' ");
  $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
  $lid=$r['logid'];
  //echo "<script>alert('$e');</script>";
    $sql="INSERT INTO spreg(logid,name,phoneno,email,gender,dob,housename,disid,city,pincode,sid,idproof,status,booked) VALUES('$lid','$a', '$b' , '$l', '$c' ,'$d', '$m', '$e', '$f','$g','$h','$img',0,0)";
   if(mysqli_query($con,$sql))
     {?>
   <script>
 alert("Regesteration Successfull");
window.location='/meenuminipro/login'</script>";
  <?php
}
else
{
  echo"error:".$sql."<br>".mysqli_error($con);
}
}
}
else
{?>
  <script>
 alert("User Already Exists");
</script>";
<?php
}
}
mysqli_close($con);
?>