<?php 
include 'co.php'; 
?>
<!DOCTYPE html>
<html>
<head>
  <title>table</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <link href="//fonts.googleapis.com/css?family=Noto+Serif:400,400i,700,700i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <div class="header-w3layouts">
    <div class="container">

     
          <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
        
        <div class="clearfix"> </div>
      </div>
      <div class="clearfix"> </div>
      <div class="logo-nav-left1">
        <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
  <div class="collapse navbar-collapse"  id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
              <li>
                <a href="adminindex.php">Home</a>
              </li>
              
              <li>
                <a href="index.html">signout</a>
              </li>
              
            </ul>
          </div>
  <style type="text/css">
    th{
      width: 150px;
      height: 50px;
      background-color:#4caf50;
      color: white;

    }
    td{
      width: 150px;
      height: 30px;
      

    }
    th,td{
      text-align: left;
      padding: 8px;
    }

  
    
    
  </style>

</head>
<body style="background: url(meenu/g.jpg); min-height:900px;">
<?php
$se=" select * from `spreg`,`district`,`scategory` WHERE spreg.status=0 && spreg.disid=district.disid && spreg.sid=scategory.sid";
 $re=mysqli_query($con,$se);
?>
<table  class="align-center"style=" margin-top: 30px; text-align: center;margin-left: auto;margin-right: auto;border-collapse: collapse;width: 90%;">
  <tr style="color: white;font-size:15px; ">
  <th>Name</th>
    <th>phoneno</th>
    <th>Gender</th>
    <th>Dob</th>
    <th>District</th>
    <th>City</th>
    <th>Address</th>
    <th>Service Category</th>
    <th>Id Proof</th>
  </tr>
<?php



while($row=mysqli_fetch_array($re))
  
 {
?>

<tr>
<td style="font-size: 15px;"> 
   <?php 
        echo $row['name'];
    ?>
  </td>
  <td style="font-size: 15px;"> 
   <?php 
        echo $row['phoneno'];
    ?>
  </td>
<td style="font-size: 15px;">
<?php
echo $row['gender'];
?>
</td>
<td style="font-size: 15px;">
<?php
echo $row['dob'];
?>
</td>
<td style="font-size:15px;">
<?php
echo $row['disname'];
?>
</td>
<td style="font-size: 15px;">
<?php
echo $row['city'];
?>
</td>
<td style="font-size: 15px;">
<?php
echo $row['address'];
?>
</td>
<td style="font-size: 15px;">
<?php
echo $row['sname'];
?>
</td>
<td style="font-size: 15px;">
<?php
echo $row['idproof'];
?>
</td>
<td>
  <form action="approve.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['logid']; ?>"/>
    <input type="submit" value="Approval">
  </form>
</td>
<td>
  <form action="reject.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['logid']; ?>"/>
    <input type="submit" value="reject">
  </form>
  </td>
</tr>
<?php
}
?>
</table>
</body>
</html>




