<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
$usr_name=$_SESSION['name'];
if($login)
{
?>
<?php 
    include 'co.php';
    $b=$_POST['id'];
    ?>
    <script>
      alert($b);
    </script>
    ?>
    <?php
    $se= "select * from addservice where sid='$b' ";
    $re=mysqli_query($con,$se);
    $rowcount=mysqli_num_rows($re);

    ?> 





<!DOCTYPE html>
<html lang="en">
<head>
    <title>Able Pro Responsive Bootstrap 4 Admin Template by Phoenixcoded</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords"
          content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <!-- Favicon icon -->
  	<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/simple-line-icons/css/simple-line-icons.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- bash syntaxhighlighter css -->
    <link type="text/css" rel="stylesheet" href="assets/plugins/syntaxhighlighter/styles/shCoreDjango.css"/>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!--color css-->
   <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.min.css" id="color"/>

</head>
<body class="sidebar-mini fixed">
<div class="wrapper">
      <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div>
<!-- Navbar-->
        <header class="main-header-top hidden-print">
    
   
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
        <!-- Navbar Right Menu-->
        <div class="navbar-custom-menu f-right">
            
            <ul class="top-nav">
                <!--Notification Menu-->
                    
               
                        <!-- window screen -->
                       
                        <!-- User Menu-->
                        <li class="dropdown">
                            <a href="#!" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                                <span><img class="img-circle " src="assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                                <span> <?php echo " $usr_name "; ?> <i class=" icofont icofont-simple-down"></i></span>

                            </a>
                            <ul class="dropdown-menu settings-menu">
                                <li><a href="#"><i class="icon-settings"></i> Settings</a></li>
                                <li><a href="profile.php"><i class="icon-user"></i> Profile</a></li>
                                <li><a href="#"><i class="icon-envelope-open"></i> My Messages</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                
                                <li><a href="logout.php"><i class="icon-logout"></i> Logout</a></li>

                            </ul>
                        </li>
                    </ul>

                    <!-- search -->
                    <div id="morphsearch" class="morphsearch">
                        <form class="morphsearch-form">

                            <input class="morphsearch-input" type="search" placeholder="Search..."/>

                            <button class="morphsearch-submit" type="submit">Search</button>

                        </form>
                        <div class="morphsearch-content">
                            <div class="dummy-column">
                                <h2>People</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://0.gravatar.com/avatar/81b58502541f9445253f30497e53c280?s=50&d=identicon&r=G" alt="Sara Soueidan"/>
                                    <h3>Sara Soueidan</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img class="round" src="http://1.gravatar.com/avatar/9bc7250110c667cd35c0826059b81b75?s=50&d=identicon&r=G" alt="Shaun Dona"/>
                                    <h3>Shaun Dona</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Popular</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="PagePreloadingEffect"/>
                                    <h3>Page Preloading Effect</h3>
                                </a>

                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="DraggableDualViewSlideshow"/>
                                    <h3>Draggable Dual-View Slideshow</h3>
                                </a>
                            </div>
                            <div class="dummy-column">
                                <h2>Recent</h2>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="TooltipStylesInspiration"/>
                                    <h3>Tooltip Styles Inspiration</h3>
                                </a>
                                <a class="dummy-media-object" href="#!">
                                    <img src="assets/images/avatar-1.png" alt="NotificationStyles"/>
                                    <h3>Notification Styles Inspiration</h3>
                                </a>
                            </div>
                        </div><!-- /morphsearch-content -->
                        <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                    </div>
                    <!-- search end -->
                </div>
            </nav>
        </header>
        <!-- Side-Nav-->
        <aside class="main-sidebar hidden-print " >
            <section class="sidebar" id="sidebar-scroll">
                
                
                <!-- sidebar profile Menu-->
                
            <!-- sidebar profile Menu-->
            <ul class="nav sidebar-menu extra-profile-list">
                <li>
                 <a class="waves-effect waves-dark" href="profile.php">
                     <i class="icon-user"></i>
                     <span class="menu-text">View Profile</span>
                     <span class="selected"></span>
                 </a>
                 </li>

                <li>
                    <a class="waves-effect waves-dark" href="#">
                        <i class="icon-settings"></i>
                        <span class="menu-text">Settings</span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="logout.php">
                        <i class="icon-logout"></i>
                        <span class="menu-text">Logout</span>
                        <span class="selected"></span>
                    </a>
                </li>
            </ul>
                
                <!-- Sidebar Menu-->
                <ul class="sidebar-menu">
                    <li class="nav-level"></li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> Service</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="viewservice.php"><i class="icon-arrow-right"></i>View Sevice</a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="icon-arrow-right"></i> View Booking history</a></li>
                            <li><a class="waves-effect waves-dark" href="feedback.php"><i class="icon-arrow-right"></i> Add feedback</a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="icon-arrow-right"></i> View feedback</a></li>
                           
                        </ul>
                    </li>
                    <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> Shopping</span><i class="icon-arrow-down"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="waves-effect waves-dark" href="viewservice.php"><i class="icon-arrow-right"></i>View Sevice</a></li>
                            <li><a class="waves-effect waves-dark" href="bookinghistory.php"><i class="icon-arrow-right"></i> View Booking History</a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="icon-arrow-right"></i> Add feedback</a></li>
                            <li><a class="waves-effect waves-dark" href="#"><i class="icon-arrow-right"></i> View feedback</a></li>
                </ul>
            </section>
        </aside>
<!-- Sidebar chat start -->
       <div id="sidebar" class="p-fixed header-users showChat">
            <div class="had-container">
                <div class="card card_main header-users-main">
                  
                </div>
            </div>

        </div>
  
<!-- Sidebar chat end-->
    <div class="content-wrapper">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <!-- Main content starts -->
            <div >
                <!-- Row Starts -->
                <?php
          while ($row=mysqli_fetch_array($re))
           {
              ?>
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Book Service</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.php"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><?php echo $row['service']; ?>

                                </li>
                                
                                <li class="breadcrumb-item"><a href="bookservice.php"></a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <?php
}
?>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row" >
                    <!-- Form Control starts -->
                     
                    <div class="col-lg-6" >
                        <div class="card" >
                            <div class="card-header"><h5 class="card-header-text">Book Service</h5>
                                
                            </div>
                            

                            <div class="card-block">
                                <form action="" method="POST" name="registration">
                                  
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-control-label">Schedule Date</label>
                                        <input type="date" class="form-control"  aria-describedby="emailHelp" name="date" id="date" onChange="return validateform1()" required="">
                                        <script>
                function validateform1()
                {
var x=document.forms["registration"]["date"].value;
if(x=="")
{
alert("Please give date");
document.getElementById("date").focus();
return false;
}
var GivenDate =document.forms["registration"]["date"].value;
var CurrentDate = new Date();
GivenDate = new Date(GivenDate);

if(GivenDate < CurrentDate){
    alert('Given date is less  than the current date.');
    document.getElementById("date").focus();
    document.getElementById("date").value="";
    return false;
}


return true;
                }               
                </script>
                
                                         
                                    </div>
                                   
                                    
                                     <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-control-label">Your Requirement</label>
                                        <Textarea type="text" class="form-control" id="req"  aria-describedby="emailHelp"  name="req" required=""></Textarea>
                                  
                                         
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-control-label">No Of Workers Needed</label>
                                        <select name="num" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
                                            <option value="">select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            v<option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            </select>                                         
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-control-label">working Hours/Days</label>
                                        <select name="hour" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
                                            <option value="">select</option>
                                            <option value="1hour">1hour</option>
                                            <option value="2hours">2hours</option>
                                            <option value="3hours">3hours</option>
                                            <option value="4hours">4hours</option>
                                            <option value="5hours">5hours</option>
                                            <option value="1day">1day</option>
                                            v<option value="2day">2day</option>
                                            <option value="3day">3day</option>
                                            <option value="other">other</option>
                                            
                                            </select>   
                                         
                                    </div>
                                    <input type="hidden"  name="sid" value="<?php echo $b;?>"/>
                                    
                                    <div class="form-group">
                                        <label for="exampleSelect1" class="form-control-label">Payment Mode</label>
                                        <select class="form-control " id="exampleSelect1" name="pmode" required="">
                                           <option value="">Select</option>
                          <option value="online">Online</option>
                          <option value="cashondelivery">Cash On Delivery</option>
                          
                        </select>
<br>                                    
                                    
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-30" name="submit">SCHEDULE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                   

                    <!-- Form Control ends -->


                </div>
                <!-- Row end -->

                <!-- Row start -->
            

             

			                      	
                                        </div>
                                        <!-- end of modal-body -->
                                    </div>
                                    <!-- end of modal-content -->
                                </div>
                                <!-- end of modal-dialog -->
                            </div>
                            <!-- end of modal -->

                            
                    <!--Input Groups Form ends-->
                </div>
                <!-- Row end -->
            </div>
            <!-- Main content ends -->
        </div>
        <!-- Container-fluid ends -->
    </div>
</div>


<!-- Required Jqurey -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/plugins/tether/dist/js/tether.min.js"></script>

<!-- Required Fremwork -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- waves effects.js -->
<script src="assets/plugins/Waves/waves.min.js"></script>

<!-- Scrollbar JS-->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

<!--classic JS-->
<script src="assets/plugins/classie/classie.js"></script>

<!-- notification -->
<script src="assets/plugins/notification/js/bootstrap-growl.min.js"></script>

<!-- syntax highlighter js -->
<script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shCore.js"></script>
<script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="assets/plugins/syntaxhighlighter/scripts/shBrushXml.js"></script>
<script type="text/javascript">SyntaxHighlighter.all();</script>

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script src="assets/js/menu.min.js"></script>

</body>
</html>
<?php
  
include 'co.php';

    if(isset($_POST['submit']))
    {
      $a=$_POST['date'];
      $b=$_POST['req'];
      $e=$_POST['hour'];
       $d=$_POST['num'];
        
      $f=$_POST['pmode'];
      $logid=$_SESSION['loginid'];
      $c=$_POST['sid'];

       $s=mysqli_query($con,"select customid from creg where logid='$logid'");
   $r=mysqli_fetch_array($s,MYSQLI_ASSOC);
   $lid=$r['customid'];
   

      
  
    $sql="INSERT INTO bookservice(customid,sid,scheduledate,requirement,duration,num,paymentmode)VALUES('$lid','$c','$a','$b','$e','$d','$f')";
      
      $ch=mysqli_query($con,$sql);
              
       if($ch)
          
          {?>
            <script>
             alert("Successful");
             </script>
             <?php
          }
        else
          {
            echo "<script>alert('error')</script>";
          }
      }
    
        mysqli_close($con);
  ?>

  <?php
}
else
  header("location:\meenuminipro\login");
?>