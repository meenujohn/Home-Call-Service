

 <?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
    ?>
 <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                         <a href="index.php"><?php echo "<font color=blue>Welcome: $type";?></a>
                        
                    </li>
                    <li class="menu-title">Customer</li><!-- /.menu-title -->
                    <li><a class="dropdown-toggle"  href="viewcustomer.php"><i class="menu-icon fa fa-th"></i>View Customer Details</a></li> <li><a class="dropdown-toggle"  href="addservice.php"><i class="menu-icon fa fa-th"></i>Add Services</a></li>
                     <li><a class="dropdown-toggle"  href="viewservice.php"><i class="menu-icon fa fa-th"></i>View Service</a></li>
                    <li><a class="dropdown-toggle"  href="viewfeedback.php"><i class="menu-icon fa fa-th"></i>View Feedback</a></li>
                    <li><a class="dropdown-toggle"  href="bookingdetails.php"><i class="menu-icon fa fa-th"></i>View Booking History</a></li>
                   <li><a class="dropdown-toggle"  href="#"><i class="menu-icon fa fa-th"></i>View Purchase History</a></li>

                          <li class="menu-title">Service Provider</li><!-- /.menu-title -->
                    <li><a class="dropdown-toggle"  href="spaproval.php"><i class="menu-icon fa fa-table"></i>Approve/Reject</a></li>
                        
                        
                    <li><a class="dropdown-toggle"  href="spdetails.php"><i class="menu-icon fa fa-th"></i>View approved service provider details</a></li>
                    <li><a class="dropdown-toggle"  href="rejectlist.php"><i class="menu-icon fa fa-th"></i>View rejected service provider details</a></li>
                    

                    

                    
                    <li class="menu-title">Company</li><!-- /.menu-title -->
                    <li><a class="dropdown-toggle"  href="#"><i class="menu-icon fa fa-th"></i>View Company Details</a></li>
                    <li><a class="dropdown-toggle"  href="#"><i class="menu-icon fa fa-table"></i>Product Approval</a></li>
                    <li><a class="dropdown-toggle"  href="#"> <i class="menu-icon fa fa-th"></i>View Product Details</a></li>
                        
                    
                       
                    </li>
                    <li class="menu-title">Delivery Boy</li><!-- /.menu-title -->
                    <li><a class="dropdown-toggle"  href="#"><i class="menu-icon fa fa-table"></i>Add </a></li>
                     <li><a class="dropdown-toggle"  href="#"><i class="menu-icon fa fa-th"></i>View Delivery Boy Details</a></li>
                    <li><a class="dropdown-toggle"  href="#"><i class="menu-icon fa fa-table"></i>Send Customer details</a></li>
                
                
                       
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/ad.jpg" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/img.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications </a>

                            <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Customer</a></li>
                                    
                                    <li class="active">Add Service</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    

                    <div class="col-lg-6" style="margin-left: auto; margin-right: auto;">
                        <div class="card">
                            <div class="card-header"><strong>Add Service</strong></div>
                            <div class="card-body card-block">
                               <form  action="addservice.php" method="POST" enctype="multipart/form-data">
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Service</label></div><br><br>
                                        <div class="col-12 col-md-9">
                                        <input type="text" name="service" id="service" class="form-control" required="">
                                          

                                        </div>
                                    </div>
                                    
                                     
 



                         <div class="form-group"><label for="country" class=" form-control-label">Description</label><textarea  type="text" id="des"  class="form-control" name="des" required=""></textarea></div>
                           <div class="form-group"><label for="country" class=" form-control-label">Price Details</label><textarea  type="text" id="price"  class="form-control" name="price" required=""></textarea></div>
                                 <div class="form-group"><label for="country" class=" form-control-label">General Instructions</label><textarea  type="text" id="ins"  class="form-control" name="ins" required=""></textarea></div>
                               
                               
                                
                               

                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm" name="submit">ADD</button></div>
                                </form>

                            </div>
                        </div>
                    </div>

                    
                    

                

                

               
               

                

               

            </div>


        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
               <div class="col-sm-6 text-right">
                Designed by Meenu John
            </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
<?php
  
include 'co.php';

    if(isset($_POST['submit']))
    {
      $a=$_POST['service'];
      $b=$_POST['des'];
       $c=$_POST['price'];
       $d=$_POST['ins'];
       $s="select * from addservice where service='$a'";
       $result=mysqli_query($con,$s);
       $rowcount=mysqli_num_rows($result);
       if($rowcount==0)
       {


     /*$img=$_FILES["file"]["name"];
      $target_dir = "upload/";
      $target_file = $target_dir . basename($_FILES["file"]["name"]);
      move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
     $image=$target_file;*/
       
      
             $sqll="insert into addservice(service,description,pricedetails,instructions)values('$a','$b','$c','$d')";
              $ch=mysqli_query($con,$sqll);
              if($ch)
                  {?>
                     <script>
                     alert("Added successfully");
                      </script>
                      <?php
                  }
              else
                  {
                     echo"error:".$sqll."<br>".mysqli_error($con);
                  }


             }
             else
             {?>
              <script>
                alert("service already exists")
              </script>
              <?php
             }     
              }
    
    
        mysqli_close($con);
    ?>
<?php
}
else
header("location:/meenuminipro/login");
?>