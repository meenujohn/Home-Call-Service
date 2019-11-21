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
  $q2="select * from login where logid='$logid'";
 $db2=mysqli_query($con,$q2);
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
                                <li><a href="#!"><i class="icon-settings"></i> Settings</a></li>
                                <li><a href="profile.php"><i class="icon-user"></i> Profile</a></li>
                                <li><a href="message.html"><i class="icon-envelope-open"></i> My Messages</a></li>
                                <li class="p-0">
                                    <div class="dropdown-divider m-0"></div>
                                </li>
                                <li><a href="feedback.php"><i class="icon-envelope-open"></i>Feedback</a></li>
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
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
<!-- Sidebar chat start -->
       <div id="sidebar" class="p-fixed header-users showChat">
            <div class="had-container">
                <div class="card card_main header-users-main">
                    <div class="card-content user-box">

                         <div class="md-group-add-on p-20">
                                 <span class="md-add-on">
                                    <i class="icofont icofont-search-alt-2 chat-search"></i>
                                 </span>
                                    <div class="md-input-wrapper">
                                        <input type="text" class="md-form-control"  name="username" id="search-friends">
                                        <label>Search</label>
                                    </div>

                        </div>
                        <div class="media friendlist-main">

                            <h6>Friend List</h6>

                        </div>
                        <div class="main-friend-list">
                          <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Alice</div>
                                  <span>1 hour ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="7" data-status="offline" data-username="Michael Scofield" data-toggle="tooltip" data-placement="left" title="Michael Scofield">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-3.png" alt="Generic placeholder image">
                                  <div class="live-status bg-danger"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Michael Scofield</div>
                                  <span>3 hours ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="5" data-status="online" data-username="Irina Shayk" data-toggle="tooltip" data-placement="left" title="Irina Shayk">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-4.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Irina Shayk</div>
                                  <span>1 day ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="6" data-status="offline" data-username="Sara Tancredi" data-toggle="tooltip" data-placement="left" title="Sara Tancredi">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-5.png" alt="Generic placeholder image">
                                  <div class="live-status bg-danger"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Sara Tancredi</div>
                                  <span>2 days ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Alice</div>
                                  <span>1 hour ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Alice</div>
                                  <span>1 hour ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip"  data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                          <div class="media friendlist-box" data-id="3" data-status="online" data-username="Alice"  data-toggle="tooltip" data-placement="left" title="Alice">
                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Alice</div>
                                  <span>1 hour ago</span>
                              </div>
                          </div>
                           <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                           <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                           <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                           <div class="media friendlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">

                              <a class="media-left" href="#!">
                                  <img class="media-object img-circle" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                                  <div class="live-status bg-success"></div>
                              </a>
                              <div class="media-body">
                                  <div class="friend-header">Josephin Doe</div>
                                  <span>20min ago</span>
                              </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="showChat_inner">
            <div class="media chat-inner-header">
                <a class="back_chatBox">
                    <i class="icofont icofont-rounded-left"></i> Josephin Doe
                </a>
            </div>
            <div class="media chat-messages">
                <a class="media-left photo-table" href="#!">
                    <img class="media-object img-circle m-t-5" src="assets/images/avatar-1.png" alt="Generic placeholder image">
                    <div class="live-status bg-success"></div>
                </a>
                <div class="media-body chat-menu-content">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
            </div>
            <div class="media chat-messages">
                <div class="media-body chat-menu-reply">
                    <div class="">
                        <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                        <p class="chat-time">8:20 a.m.</p>
                    </div>
                </div>
                <div class="media-right photo-table">
                    <a href="#!">
                        <img class="media-object img-circle m-t-5" src="assets/images/avatar-2.png" alt="Generic placeholder image">
                        <div class="live-status bg-success"></div>
                    </a>
                </div>
            </div>
            <div class="media chat-reply-box">
              <div class="md-input-wrapper">
                    <input type="text" class="md-form-control" id="inputEmail" name="inputEmail" >
                    <label>Share your thoughts</label>
                   <span class="highlight"></span>
                 <span class="bar"></span>  <button type="button" class="chat-send waves-effect waves-light">
                     <i class="icofont icofont-location-arrow f-20 "></i>
                 </button>

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
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Give Your Feedback</h4>
                            
                        </div>
                    </div>
                </div>
                <!-- Row end -->

                <!-- Row start -->
                <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Feed back</h5>
                                
                            </div>
                            
                                   <?php

                                              while ( $row=mysqli_fetch_array($db2)) {
                                                 # code...
                                              
  
                                               
                                     

           ?>
                            <div class="card-block">
                                <form action="" method="POST">
                                  <div class="form-group">
                                        <label for="exampleInputEmail1" class="form-control-label">username</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $row['username'];?>"  name="name" readonly>
                                         
                                    </div>
                                  
                                        <div class="form-group">
    <label for="exampleTextarea" class="form-control-label">feedback</label>
        <textarea class="form-control" id="exampleTextarea" rows="4" name="feedback" required=""></textarea>
</div>
                                         
                                    
                                    
                                
                                    
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-30" name="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                        <?php }
                        ?>
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
                         text: 'Error' },
                         function()
                         {
                          window.location="feedback.php";
                         });
                  }
                  else
                  {
                    swal({ type: 'success',
                         title: 'Feedback Added Successfully ' },
                         function()
                         {
                          window.location="feedback.php";
                         });
                  }
        
                }
            </script>
</body>
</html>
<?php
  
include 'co.php';

    if(isset($_POST['submit']))
    {
      $a=$_POST['name'];
      $b=$_POST['feedback'];

      $sq="select * from login where logid= '$logid'";
      
      $res=mysqli_query($con,$sq);
      $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
      $email=$row['username'];
      $id=$row['logid'];
      
     $sql="INSERT INTO feedback(logid,username,feedback)VALUES('$id','$a','$b')";
    $ch=mysqli_query($con,$sql);
              
       if($ch)
          {
        echo "<script>swtalert('1');</script>";
          }
        else
          {
            echo "<script>swtalert('3');</script>";
          }
        }

      
    
        mysqli_close($con);
  ?>

  <?php
}
else
  header("location:/meenuminipro/login");
?>