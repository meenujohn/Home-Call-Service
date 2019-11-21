<?php
session_start();
$login=$_SESSION['login'];
$type=$_SESSION['type'];
if($login)
{
?>



<?php
include 'co.php';
$se="select * from feedback";
 $re=mysqli_query($con,$se);
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
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
                    <li><a class="dropdown-toggle"  href="#"><i class="menu-icon fa fa-th"></i>View Feedback</a></li>
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

                            <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span> </span></a>

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
                                    <li><a href="#">customer</a></li>
                                    <li class="active">View Feedback</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content" >
            <div class="animated fadeIn">
                <div class="row" >
                    <div class="" style="margin-left: auto;margin-right: auto;" >
                        <div class="card" >
                            <div class="card-header" >
                                <strong class="card-title" >Customer Feedback</strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                            </div>
                          <div class="container" style="width:700px;">  
               
                <div class="table-responsive">  
                     
                     <br />  
                     <div id="employee_table">  
                          <table class="table table-bordered" id="myTable">  
                               <tr>  
                                    <th width="70%">Username</th>    
                                    <th width="15%">View feedback</th>  
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($re))  
                               {  
                               ?>  
                               <tr>  
                                    <td><?php echo $row["username"]; ?></td>  
                                    <td><input type="button" name="view" value="view" id="<?php echo $row["fid"]; ?>" class="btn btn-info btn-xs view_data" /></td> 
                                     
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>  
                     </div>  
                </div>  
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
            <div class="col-sm-6">
                Copyright &copy; 2018 Ela Admin
            </div>
            <div class="col-sm-6 text-right">
                Designed by <a href="https://colorlib.com">Colorlib</a>
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
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">User Feedback</h4>  
                </div>  
                <div class="modal-body" id="employee_detail">  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>  


 <script>  
 $(document).ready(function(){  
       
      $(document).on('click', '.edit_data', function(){  
           var feedid = $(this).attr("id");  
           $.ajax({  
                url:"ffetch.php",  
                method:"POST",  
                data:{fid:fid},  
                dataType:"json",  
                success:function(data){  
                     $('#name').val(data.username);  
                     $('#address').val(data.name);  
                     $('#phone').val(data.feedback);  
                     $('#sid').val(data.fid);  
                     $('#insert').val("Update");  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
           
      $(document).on('click', '.view_data', function(){  
           var fid = $(this).attr("id");  
           if(fid != '')  
           {  
                $.ajax({  
                     url:"fselect.php",  
                     method:"POST",  
                     data:{fid:fid},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>

<?php
}
else
  header("location:/meenuminipro/login");
?>