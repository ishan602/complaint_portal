<?php 
error_reporting(0);
include_once('../../php/display.php');
isset($_GET['id']);
$sno = $_GET['id'];
$select = "Select * from inventory where S_no= '$sno'";
$select_query = mysqli_query($con,$select);
$rows = mysqli_fetch_array($select_query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="../../img/smvdulogo.png" type="image/ico" />
    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-user"></i> <span>Administrator</span></a>
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
					<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="index.php">Dashboard</a></li>
						<li><a href="info.php">Details</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Inventory <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="store.php">Store</a></li>
                    <li><a href="add_item.php">Add Item</a></li>
						<li class="active"><a href="update_item.php">Update Item</a></li>
                    </ul>
                  </li>
					<li><a><i class="fa fa-table"></i> Complaints <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
						<li  class="active"><a href="complaints.php">All Complaints</a></li>
                      <li><a href="network_complaint.php">Network Complaints</a></li>
                    <li><a href="internet_complaint.php">Internet Complaints</a></li>
						<li><a href="other_complaint.php">Other Complaints</a></li>
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
                    <img src="../../img/contact/sudesh_sir.jpg" alt="">Sudesh Kumar
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li>
                      <a href="change_password.php">
                        <span>Change Password</span>
                      </a>
                    </li>
                    <li><a href="../../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>   
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Update Item</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                      <form method="GET" action="update_item_script.php">
                          <span id="success_message" class="text-primary"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></span>
						  <span id="fail_message" class="text-danger"><?php if(isset($_GET['imsg'])) echo $_GET['imsg'];?></span>
                    <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter item name" name="name" value="<?php echo $rows['Name']; ?>" disabled required>
                        </div>
                        <div class="form-group">
                        <label for="sel1">Category</label>
                        <select class="form-control" id="sel1" name="category" required>
                                <option value="Printer">Printer</option>
                                <option value="Hardware">Hardware</option>
                                <option value="Computer">Computer</option>
                                <option value="Other">Other</option>
                        </select>
                        </div>
                    <div class="form-group">
                            <label for="t_units">Total Units Bought</label>
                            <input type="number" class="form-control" id="c_no" placeholder="Units bought" name="t_units"  id="t_units" required>
                    </div>
                        <div class="form-group">
                            <label for="m_units">Measuring Units</label>
                            <select class="form-control" id="sel2" name="m_units" required>
                                <option value="meter">Meters</option>
                                <option value="piece">Pieces</option>
                                <option value="number">Number</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="issued">Issued</label>
                            <input type="number" class="form-control" id="issued" placeholder="units issued" name="issued" required>
                    </div>
                           <div class="form-group">
                            <label for="comp">Date of buying</label>
                            <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date" required>
                    </div>   
                <button type="submit" class="btn btn-primary btn-block" id="submit">Update</button>
                        <hr>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
        </body>
</html>