<?php 
session_start();
error_reporting(0);
$email = $_SESSION['email'];
include_once('../php/display.php');
$query ="SELECT * FROM signup where Email = '$email'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$rows = mysqli_fetch_array($result);
//$row = mysqli_fetch_array($result);
if (isset($_SESSION['email']))
{}
else
    header("location:post_complaint.php");

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Complaint portal SMVDU">
    <meta name="keywords" content="SMVDu, complain, complaint, smvdu complain, network centre">
    <meta name="author" content="Network Center Smvdu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodge Complaint</title>
    <link rel="icon" href="../img/photo.jpg">
    <link rel="stylesheet" href="../css/footer.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--------------------------------------- FA Icons ------------------------------------------------>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .home_cover{
            background-image: url("../img/home_cover.jpg");
            background-size:cover;
            height: 800px;
        }
        .login{
            float: left;
           padding: 10px;
            height: auto;
            background-color: white;
            color:black;
            border: 2px solid white;
            border-radius:5px;
            margin-top: 30px;
            margin-left: 100px;
			width: 500px;
			box-shadow: 5px 5px 5px 7px gray;
        }
        .form{
            text-align: left;
            
        }
        tr:hover{
            color:black;
            background-color: white;
        }
		@media only screen and (max-width: 768px){
			.login{
				width: 100%;
				margin:3px;
				opacity: 0.9;
				padding: 10px;
			}
		}
    </style>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row" style="background-color:maroon;">
        <div class="col-md-1 col-sm-11 col-xs-12 ">
            <img src="../img/smvdulogo.png"class="img-responsive" />
            </div>
            <div class="col-md-10 col-sm-10 col-xs-12">
                <p style="color:white; font-size:40px;text-align:center;">Network Centre SMVDU</p><p style="font-size:25px;text-align:center;color:white">Complaint Portal</p>
            </div>
        </div>
        </div>
        <nav class="navbar navbar-inverse" style="margin-bottom:0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="lodge_griveance.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Network Centre Forms<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://network.smvdu.ac.in/networkforms/LAN%20Networkfaculty.pdf" target="_blank">Internet/ Email Facility(Faculty Forms)</a></li>
            <li><a href="http://network.smvdu.ac.in/networkforms/LAN%20networkstudents.pdf"  target="_blank">Internet/ Email Facility(Student Forms)</a></li>
            <li><a href="http://network.smvdu.ac.in/networkforms/Email%20to%20All%20Facility%20Approval%20Form.pdf"  target="_blank">E-Mail to all facilities approval Form</a></li>
              <li><a href="http://network.smvdu.ac.in/networkforms/Internet%20Complaint%20Form.pdf"  target="_blank">Internet Complaint Portal</a></li>
              <li><a href="http://network.smvdu.ac.in/networkforms/Internet%20Complaint%20Form.pdf"  target="_blank">Computer Complaint Form</a></li>
            <li><a href="http://network.smvdu.ac.in/networkforms/Laptop%20Battery%20Repalcement%20form.pdf"  target="_blank">laptop Battery replacement Form</a></li>
         <li> <a href="http://network.smvdu.ac.in/networkforms/E-waste%20form%20for%20Computers%20and%20Peripherals.pdf"  target="_blank">E-Waste Form for Computer and Peripherals</a></li>
          </ul>
		  </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Contact<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="office_add.html" target="_parent">Office Address</a></li>
            <li><a href="our_team.html" target="_parent">Our Team</a></li>
            </ul>
          </li>
        <li><a href="infrastructure.html">Infrastructure</a></li>
          <li><a href="training.html">Training</a></li>
          <li><a href="download.html">Download</a></li>
		  <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li class="active"><a href="update_profile.php" target="_parent">Update Profile</a></li>
            <li><a href="change_password.php" target="_parent">Change Password</a></li>
            </ul>
          </li>
        </ul>
        <a href="../php/logout.php"style="text-decoration:none;color:white;"><button class="btn btn-danger" id="logout" style="float:right;margin:5px;">Logout(<?php echo $_SESSION['email'];?>)</button></a>
    </div>
  </div>
</nav>
        
        <div class="home_cover">
			<div class="login">
                
         	
                    <center><h3><u>Update Profile</u></h3></center>
			   
                
			   
                    <form action="../php/update_profile_script.php" method="POST">
                        <span id="success_message" class="text-primary"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></span>
						<span id="fail_message" class="text-danger"><?php if(isset($_GET['imsg'])) echo $_GET['imsg'];?></span>
                    <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $rows['Email'];?>"required readonly>
                    </div>
						<div class="form-group">
                            <label for="email">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="e.g. John" name="name" required>
                    </div>
						<div class="form-group">
                            <label for="tel">Contact Number:</label>
                            <input type="tel" class="form-control" id="cno" name="cno" value="<?php echo $rows['C_no'];?>" required readonly>
							
                    </div>
						<div class="form-group">
							<label for="Gender">Gender:</label>
						<div class="form-check form-check-inline">
  							<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male" checked>
								Male
								</div>
							<div class="form-check form-check-inline">
  						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
  							Female
								</div>
						</div>
						<div class="form-group">
                            <label for="hostel">Hostel:</label>
                            <select class="form-control" id="sel2" name="hostel" required>
                                <option value="Nilgiri">Nilgiri</option>
                                <option value="Basholi Boys Hostel">Basholi Boys Hostel</option>
                                <option value="Vindhyanchal">Vindhyanchal</option>
                                <option value="Trikuta">Trikuta</option>
                                <option value="Kailash Hostel">Klash Hostel</option>
                                <option value="Shivalik Hostel">Shivalik Hostel</option>
                                <option value="Vaishnavi Hostel">Vaishnavi Hostel</option>
                                <option value="Faculty Residence">Faculty Residence</option>
                        </select>
                    </div>
						<div class="form-group">
                            <label for="r_no">Room No.</label>
                            <input type="tel" class="form-control" id="r_no" placeholder="Enter Room number" name="r_no" maxlength="3" required>
                    </div>
                        <div class="form-group">
                            <label for="block">Block</label>
                            <input type="text" class="form-control" id="block" placeholder="Enter Block" maxlength="1" pattern="[a-zA-Z]$" name="block" required>
							<small class="form-text text-muted">Block must be an alphabet</small>
                    </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
                        <button type="reset" class="btn btn-danger btn-block">Reset</button><hr>
                    </form>
                   </div>
		</div>
        
        <div class="container-fluid footer">
            <center><b><a href="#">Network Policy</a> | <a href="link/office_add.html">Contact</a> | <a href="#">Project</a> | <a href="#">Adminstration Forms</a></b><p>All right reserved | &copy; Content Owned By Network Centre, SMVDU</p>
            <a href="" class="f_icon"><i class="fa" style="font-size:27px;">&#xf082;</i></a>
            <a href="" class="f_icon"><i class="fa fa-instagram" style="font-size:27px;"></i></a>
            <a href="" class="f_icon"><i class="fa fa-github" style="font-size:27px;"></i></a>
            <a href="" class="f_icon"><i class="fa fa-linkedin-square" style="font-size:27px;"></i></a>
            </center>
        </div>
    </body>
</html>