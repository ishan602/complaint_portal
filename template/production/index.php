<?php 
session_start();
$email =$_SESSION['email'];
error_reporting(0);
include_once('../../php/display.php');
$select = "SELECT * from admin_comp order by C_no";
$result = mysqli_query($con, $select);
$selectcomp = "Select * from complaint";
$resultcomp = mysqli_num_rows(mysqli_query($con,$selectcomp));
$selectcompn = "Select * from complaint where Category = 'Network'";
$resultcompn = mysqli_num_rows(mysqli_query($con,$selectcompn));
$selectcompi = "Select * from complaint where Category = 'Internet'";
$resultcompi = mysqli_num_rows(mysqli_query($con,$selectcompi));
$selectcompo = "Select * from complaint where Category = 'Other'";
$resultcompo = mysqli_num_rows(mysqli_query($con,$selectcompo));
$selectcomps = "Select * from complaint where Status = 'Solved'";
$resultcomps = mysqli_num_rows(mysqli_query($con,$selectcomps));
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../../img/photo.jpg" type="image/ico" />

      <title>Admin Dashboard / Dashboard</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
      
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>Adminstrator</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../../img/contact/sudesh_sir.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Sudesh Kumar</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
					<li class="active"><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li class="active"><a href="index.php">Dashboard</a></li>
						<li><a href="info.php">Details</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Inventory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="store.php">Store</a></li>
                    <li><a href="add_item.php">Add Item</a></li>
						<li><a href="update_item.php">Update Item</a></li>
                    </ul>
                  </li>
					<li><a href="complaints.php"><i class="fa fa-table"></i> Complaints <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="network_comp.php">Network Complaints</a></li>
                    <li><a href="internet_comp.php">Internet Complaints</a></li>
						<li><a href="other_comp.php">Other Complaints</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../../img/contact/sudesh_sir.jpg" alt="sudesh kumar"><b>Sudesh Kumar</b>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
					  <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="../../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
                </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

          
          <!-- top tiles -->
          
          <div class="row tile_count">
            
            <div class=" col-md-offset-2 col-sm-offset-4 col-xs-offset-6 col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Complaint</span>
				<div class="count green"><?php echo $resultcomp;?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Network Complaints</span>
              <div class="count green"><?php echo $resultcompn;?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Internet Complaints</span>
              <div class="count"><?php echo $resultcompi;?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Others Complaints</span>
              <div class="count"><?php echo $resultcompo;?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Solved Complaints</span>
              <div class="count"><?php echo $resultcomps;?></div>
            </div>
          </div> 
          
          
            
                <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                  <h3>Complaint</h3>
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
               <!---   <div class="x_title">
                    
                    <div class="clearfix"></div>
                  </div> -->

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">C No. </th>
                            <th class="column-title">Name</th>
                            <th class="column-title">Complaint</th>
                            <th class="column-title">Hostel</th>
							  <th class="column-title">Complaint Category</th>
                            <th class="column-title">Remark</th>
                            <th class="column-title">Options</th>
                            </tr>
                        </thead>

                        <tbody>
                         <?php 
                       while($rows = mysqli_fetch_array($result))
                           //echo $rows;
                       {?>
                           <tr>
                               <td>
                               <?php echo $rows['C_no'];?>
                               </td>
                            <td>
                               <?php echo $rows['Name'];?>
                               </td>
                               <td>
                               <?php echo $rows['complaint'];?>
                               </td>
                               <td>
                               <?php echo $rows['Hostel'];?>
                               </td>
							   <td>
                               <?php echo $rows['Category'];?>
                               </td>
                               <td>
                               <?php echo $rows['Remark'];?>
                               </td>
							   <?php echo "<td><a href=info.php?id=".$rows['C_no'].">View Complaint</a></td>";?>
							   
                               </tr>
                     <?php  }
                       ?>

                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
    
          
            
        
          
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
