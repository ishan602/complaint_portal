<?php
session_start();
if (isset($_SESSION['email']))
{
    header("location:lodge_griveance.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Complaint portal SMVDU">
    <meta name="keywords" content="SMVDu, complain, complaint, smvdu complain, network centre">
    <meta name="author" content="Network Center Smvdu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Complaint</title>
    <link rel="icon" href="../img/smvdulogo.png">
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
            background-image: url("../img/cover3.jpg");
            background-size:cover;
        }
        .login{
            float: left;
           padding: 20px;
            height: 500px;
            background-color: black;
            color:white;
            border: 2px solid white;
            border-radius:5px;
        opacity:0.7;
            text-align: center;
        }
        .form{
            text-align: left;
            margin-top: 10%;
        }
    </style>
    </head>
    <body>
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
        <li><a href="link/infrastructure.html">Infrastructure</a></li>
          <li><a href="training.html">Training</a></li>
          <li><a href="download.html">Download</a></li>
        
        </ul>
    </div>
  </div>
</nav>
        <div class="container-fluid home_cover">
            <div class="container-fluid">
           <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 login">
               <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12"><figure>
                 <img src="../img/smvdulogo.png" class="" height="50px" widht="50px"/>
                </figure></div>
                   <div class="col-md-offset-1 col-sm-offset-1 col-md-8 col-sm-8 col-xs-12" style="font-size:20px;">
                   <b>Shri Mata Vaishno Devi University</b>
                   </div>
                    </div><br>
                    <center><h2>LOGIN</h2></center>
                <div class="form">
                    <form action="../php/login_script.php" method="post">
                        <span id="error_message" class="text-danger"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></span>
                     <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" pattern="[0-9a-z0-9]+@smvdu.ac.in$" placeholder="xyz@smvdu.ac.in" name="email" required>
					</div>
                    <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" minlength="8" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter password" name="pwd" required>
						
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                     </div>
                <button type="submit" class="btn btn-primary btn-block">Submit</button><hr>
                        <center style="text-decoration:none;"><p><a href="signup.html">New User?</a> || <a href="first_time.php">Forgot password</a> || <a href="first_time.php">First Time Login</a><br /></p></center>
                    </form>
                    </div>
               </div>
                </div>
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