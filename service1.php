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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
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

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="assets/css/color/color-1.min.css" id="color"/>

  </head>

  <body class="sidebar-mini fixed">
      <div class="loader-bg">
    <div class="loader-bar">
    </div>
  </div>
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
       
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu f-right">
              <div class="upgrade-button m-r-10">
                  
              </div>
            <ul class="top-nav">
              <!--Notification Menu-->

              
                  </li>
                  <!-- chat dropdown -->
                  
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
                                <li><a href="lock-screen.html"><i class="icon-lock"></i> Lock Screen</a></li>
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
    
      
    <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level"></li>
                <li class="treeview">
                    <a class="waves-effect waves-dark" href="index.php">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
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
                            <li><a class="waves-effect waves-dark" href="accordion.html"><i class="icon-arrow-right"></i>View Sevice</a></li>
                            <li><a class="waves-effect waves-dark" href="button.html"><i class="icon-arrow-right"></i> View Booking history</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> Add feedback</a></li>
                            <li><a class="waves-effect waves-dark" href="label-badge.html"><i class="icon-arrow-right"></i> View feedback</a></li>
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

    <!-- Header starts -->
    <div class="row">
      <div class="col-sm-12 p-0">
        <div class="main-header">
          <h4>Book Service</h4>
          <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
            <li class="breadcrumb-item">
              <a href="index.php">
                <i class="icofont icofont-home"></i>
              </a>
            </li>
            <li class="breadcrumb-item">
              <a href="viewservice.php">Service</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Book Service</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <!-- Header ends -->

    <!-- Row start -->
    <div class="row">
      <!-- Multiple Open Accordion start -->
      <?php
          while ($row=mysqli_fetch_array($re))
           {
              ?>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-header">
            <h5 class="card-header-text"> <?php
              echo $row['service'];
              ?></h5>
          </div>
          <div class="card-block accordion-block">
            <div id="accordion" role="tablist" aria-multiselectable="true">
              <div class="accordion-panel">
                <div class="accordion-heading" role="tab" id="headingOne">
                  <h3 class="card-title accordion-title">
                    
                  </h3>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="accordion-content accordion-desc">
                    <p>
                      <?php
              echo $row['description'];
              ?>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-panel">
                <div class="accordion-heading" role="tab" id="headingTwo">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Price Details
                    </a>
                  </h3>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="accordion-content accordion-desc">
                    <p>
                      <p>
                      <?php
              echo $row['pricedetails'];
              ?>
                    </p>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingThree">
                  <h3 class="card-title accordion-title">
                    <a class="accordion-msg" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      General Instructions
                    </a>
                  </h3>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="accordion-content accordion-desc">
                    <p>
                     <p>
                      <?php
              echo $row['instructions'];
              ?>
                    </p>
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-panel">
                <div class=" accordion-heading" role="tab" id="headingThree">
                  <h3 class="card-title accordion-title">
                    <form action="bookservice.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['sid']; ?>"/>
    <input type="submit" value="BOOK NOW" class="btn btn-inverse-success">
  </form>
                  </h3>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
}
?>
      <!-- Multiple Open Accordion ends -->

      <!-- Single Open Accordion start -->
      
</div>
</div>
</div>


<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
              a  </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->

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

<!-- custom js -->
<script type="text/javascript" src="assets/js/main.min.js"></script>
<script type="text/javascript" src="assets/pages/accordion.js"></script>
<script type="text/javascript" src="assets/pages/elements.js"></script>
<script src="assets/js/menu.min.js"></script>

</body>

</html>
<?php
}
else
header('location:/meenuminipro/login');
?>
