<?php 
session_start(); 
//echo "popo";

include("co.php");
if(isset($_POST['submit']))
{
    $uname =$_POST['uname'];
	$pass =$_POST['pass'];
	  $p=md5($pass);
//echo $u_pass;

$sql="select * from login where username='$uname'";
//echo $sql;

$result=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($result);
if($rowcount!=0)
{

	while($row=mysqli_fetch_array($result))
	{
		$dbu_name=$row['username'];
		$dbu_pass=$row['password'];
		$dbu_type=$row['usertype'];
		$id=$row['logid'];
        $dbu_status=$row['status'];
        
		if($dbu_name==$uname && $dbu_pass==$p && $dbu_status==1)
		{
			$_SESSION['uname']=$dbu_name;
            $_SESSION['pass']=$dbu_pass;
            $_SESSION['login']="1";
            $_SESSION['loginid']=$id;
            
		     //echo $dbu_type;
			if($dbu_type==0)	
			{
				$_SESSION['type']="Admin";
               	header('Location: /meenuminipro/admin/index.php');
			}
			else if($dbu_type==1)
			{
				$_SESSION['type']="Customer";
				$sql1="select * from creg where logid ='$id'";
				$result1=mysqli_query($con,$sql1);
				if($row1=mysqli_fetch_array($result1))
					$usr_name=$row1['name'];
				$_SESSION['name']=$usr_name;
                	header('Location: /meenuminipro/cuser');
			}
			else if($dbu_type==2)
			{
				$_SESSION['type']="Service Provider";
				$sql2="select * from spreg where logid ='$id'";
				$result2=mysqli_query($con,$sql2);
				if($row1=mysqli_fetch_array($result2))
					$usr_name=$row1['name'];
				$_SESSION['name']=$usr_name;
					header('Location: /meenuminipro/spuser');
			}
		}
		else
        {?>
	<script>
 alert("Invalid login credentials");
 window.location='index.html'
</script>;
<?php
				//header("location:signin.php?error=wrong password");
          //echo "wrong";
        }
	}
}
else
{?>
	<script>
 alert("User not found");
 window.location='index.html'
</script>;
<?php
			//header("location:signin.php?error=User Not Found");
			//echo "not found";	
}
}
?>