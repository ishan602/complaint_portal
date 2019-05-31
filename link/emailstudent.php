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
    <title>Requirement</title>
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
        .login{
            float: left;
           padding: 20px;
            height: auto;
            background-color: white;
            color:black;
            border: 2px solid white;
            border-radius:5px;
            opacity: 0.9;
			width: auto;
        }
        .form{
            text-align: left;
            
        }
        tr:hover{
            color:black;
            background-color: white;
        }
		div.form-group{
			padding: 20px;
			margin: 5px;
		}
		
        ul.use{
            padding: 10px;
            font-size: 15px;
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
        <li><a href="../index.php">Home</a></li>
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
        </ul>
        <a href="../php/logout.php"><button class="btn btn-danger" style="float:right;margin:5px;">Logout(<?php echo $_SESSION['email'];?>)</button></a>
    </div>
  </div>
</nav>
        
<div class="home_cover">
			<div class="login">
               <center><h3><u>Email Facility to Student</u></h3></center>
			   <form class="form-inline" method="POST" action="../php/emailstudent_script.php">
				   <div class="form-group">
                            <label for="name">Full Name*:</label>
                            <input type="text" class="form-control" id="name" placeholder="e.g. Ishan Kumar" name="name" required>
                        </div>
                <div class="form-group">
                            <label for="name">Enrollment No*:</label>
                            <input type="text" class="form-control" id="eid" placeholder="Entry Number" name="eid" required>
                        </div>
                    <div class="form-group">
                            <label for="name">Department/School*:</label>
                            <input type="text" class="form-control" id="dept" placeholder="Enter your department" name="dept" required>
                        </div>
				   <div class="form-group">
                            <label for="name">Semester*:</label>
                            <input type="text" class="form-control" id="sem" placeholder="Enter your Sem" name="sem" required>
                        </div>
						  <div class="form-group">
                            <label for="name">Permanent Address*:</label>
                            <input type="text" class="form-control" id="padd" placeholder="Full address" name="padd" required>
                        </div>
				   <div class="form-group">
                            <label for="name">University Hostel Address*:</label>
                            <input type="text" class="form-control" id="uadd" placeholder="Full address" name="uadd" required>
                        </div>
						  <div class="form-group">
                            <label for="name">Contact Number*:</label>
                            <input type="tel" class="form-control" id="tel" placeholder="Enter your number" name="cno" required>
                        </div>
				   <div class="form-group">
                            <label for="name">MAC ID of LAN Card:</label>
                            <input type="number" class="form-control" id="mac_lan" name="mac_lan">
                        </div>
						  <div class="form-group">
                            <label for="name">MAC ID of Wi-Fi Card:</label>
                            <input type="number" class="form-control" id="mac_wifi" name="mac_wifi">
                        </div>
						  <div class="form-group">
                            <label for="name">University Email*:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your university email id" name="email" required>
                        </div>
				   <div class="form-group">
                            <label for="comp">Date of Issuing</label>
                            <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date" value="<?php echo date("Y-m-d");?>" readonly required>
                    </div> 
				   
				   <small><b>Note:</b> * are required</small>
			   <button type="submit" class="btn btn-primary btn-block">Submit Requirement</button>
                    </form>
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