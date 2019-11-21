<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$usr_name=$_SESSION['name'];
$logid=$_SESSION['loginid'];
if($login)
{
?>
<?php
include 'co.php';
  $se=" select * from `creg`,`district` WHERE  creg.disid=district.disid AND logid='$logid'";s
$re=mysqli_query($con,$se);
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/abc.js"></script>
<script type='text/Javascript'>
               function swtalert(swlt)
                {
                  if(swlt==0)
                  {
                    swal({ type: 'error',
                         title: 'Oops!',
                         text: 'Something went wrong' },
                         function()
                         {
                          window.location="profile.php";
                         });
                  }
                  else if(swlt==2)
                  {
                    swal({ type: 'error',
                         title: 'Oops!',
                         text: 'New password and re-type password does not match' },
                         function()
                         {
                          window.location="profile.php";
                         });
                  }
                  else if(swlt==3)
                  {
                    swal({ type: 'error',
                         title: 'Oops!',
                         text: 'You entered wrong old password' },
                         function()
                         {
                          window.location="profile.php";
                         });
                  }
                  else
                  {
                    swal({ type: 'success',
                         title: 'Password Changed Successfully' },
                         function()
                         {
                          window.location="profile.php";
                         });
                  }
        
                }
            </script>
  
  
</body>
</html>


<?php
  $sq="Select * from login where logid='$logid'";
  $res=mysqli_query($con,$sq);
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
  $username=$row['username'];
  $p=$row['password'];
  if(isset($_POST['save']))
   {
    //old password
    $pd=$_POST['opsw'];
    $pass=md5($pd);
    // new password
    $ps=$_POST['npsw'];
    $pswd=md5($ps);
    $psw=$_POST['rnpsw'];
    $pa=md5($psw);

    //echo "<script>alert('$email')</script>";

    if(!(strcmp($pass, $p)))
    {
      if(!(strcmp($pswd, $pa)))
      {
        if(mysqli_query($con,"Update login set password='$pswd' where username='$username'"))
        {
          echo "<script>swtalert('1');</script>";
        }
        else
        {
          echo "<script>swtalert('0');</script>";
        }
      }
      else
      {
        echo "<script>swtalert('2');</script>";
      }
    }
    else
    {
      echo "<script>swtalert('3');</script>";
    }    

   }
 ?>

<?php
}
else
  header("location:login.html");
?>