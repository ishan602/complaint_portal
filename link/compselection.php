<?php 
session_start();
error_reporting(0);
$email = $_SESSION['email'];
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Complaint portal SMVDU">
    <meta name="keywords" content="SMVDu, complain, complaint, smvdu complain, network centre">
    <meta name="author" content="Network Center Smvdu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Network Center Home</title>
    <link rel="icon" href="../img/smvdulogo.png">
    <link rel="stylesheet" href="css/footer.css">
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
            
            background-repeat: no-repeat;
            
        }
		.form_place{
			color: black;
			margin: 122px;
			padding: 50px;
			background-color:white;
			opacity: 0.9;
		}
        
        ul.use{
            padding: 10px;
            font-size: 15px;
        }
    </style>
    </head>
    <body class="home_cover">
    <div class="container-fluid">
        <div class="row" style="background-color:maroon;">
        <div class="col-md-1 col-sm-1 col-xs-12 ">
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
        <li><a href="index.php">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown">Network Centre Forms<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="emailfaculty.php" target="_blank">Internet/ Email Facility(Faculty Forms)</a></li>
            <li><a href="emailstudent.php"  target="_blank">Internet/ Email Facility(Student Forms)</a></li>
            <li><a href="emailtoall.php"  target="_blank">E-Mail to all facilities approval Form</a></li>
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
        </ul>
        <a href="../php/logout.php"><button class="btn btn-danger" style="float:right;margin:5px;">Logout(<?php echo $_SESSION['email'];?>)</button></a>
    </div>
  </div>
</nav>
        
		<div class="container">
			<div class="row">
			<div class="form_place">
				<form class="form-inline" action="../php/selcomp_script.php" method="GET">
					<span id="fail_message" class="text-danger"><?php if(isset($_GET['imsg'])) echo $_GET['imsg'];?></span>
					<center><span class="text-danger"><b>Online services in our portal are available only for the complaint listed here</b></span></center><br /><br />
				<center>
					<div class="form-group">
                        <label for="selcomp">Please select the Category of complaint / Requirement:</label>
                        <select class="form-control" id="sel1" name="category" required>
							<option value="NULL">------SELECT------</option>
                                <option value="email_faculty">Email Facility for faculty</option>
                                <option value="email_student">Email facility for student</option>
                                <option value="email_to_all">Email to all facilities</option>
								<option value="computer">Computer Complaint</option>
							<option value="comp_battery">Laptop Battery Replacement</option>
                                <option value="other">Other Complaint</option>
                        </select>
                        </div>
					<button type="submit" class="btn btn-primary">Submit</button>
					</center>
					
				</form>
				</div>
			</div>
			</div>
	
            
        
        <div class="container-fluid footer">
            <center><b><a href="#">Network Policy</a> | <a href="office_add.html">Contact</a> | <a href="#">Project</a> | <a href="#">Adminstration Forms</a></b><p>All right reserved | &copy; Content Owned By Network Centre, SMVDU</p>
            <a href="" class="f_icon"><i class="fa" style="font-size:27px;">&#xf082;</i></a>
            <a href="" class="f_icon"><i class="fa fa-instagram" style="font-size:27px;"></i></a>
            <a href="" class="f_icon"><i class="fa fa-github" style="font-size:27px;"></i></a>
            <a href="" class="f_icon"><i class="fa fa-linkedin-square" style="font-size:27px;"></i></a>
            </center>
        </div>
    </body>
</html>