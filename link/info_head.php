<?php 
session_start();
$_SESSION['email'];
error_reporting(0);
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
isset($_GET['id']);
$cno = $_GET['id'];
$select = "Select * from complaint where comp_no= '$cno'";
$select_query = mysqli_query($con,$select) or die("Not working");
$rows = mysqli_fetch_array($select_query);

//$select_query = "Select Name from inventory";
//$select_query_result = mysqli_query($con,$select_query);
if (isset($_SESSION['email']))
{}
else
    header("location:../index.php");

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
            background-image: url("../img/home_cover.jpg");
            background-size:cover;
            height: 800px;
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
			box-shadow: 5px 5px 5px 7px gray;
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
        <li><a href="department_admin.php">Home</a></li>
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
        <li class="dropdown active">
            <a class="dropdown-toggle" data-toggle="dropdown">Options<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="info_head.php" target="_parent">Complaint Details</a></li>
            <li><a href="solve_comp.php" target="_parent">Solve Complaint</a></li>
            </ul>
          </li>
		  <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown">Setting<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="update_profile.php" target="_parent">Update Profile</a></li>
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
               <center><h3><u>Complaint Details</u></h3></center>
			   <form class="form-inline" method="POST" action="../php/forward_comp.php">
				   <div class="form-group">
                            <label for="name">Complaint Number:</label>
                            <input type="text" class="form-control" id="compnum" placeholder="Your Complaint" name="compnum" value="<?php echo $rows['comp_no']; ?>" readonly required>
                        </div>
                <div class="form-group">
                            <label for="name">Complaint:</label>
                            <input type="text" class="form-control" id="comp" placeholder="Your Complaint" name="comp" value="<?php echo $rows['Complaint']; ?>" readonly required>
                        </div>
                    <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter item name" name="name" value="<?php echo $rows['Name']; ?>" readonly required>
                        </div>
						  <div class="form-group">
                            <label for="name">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter University Email" name="email" value="<?php echo $rows['email']; ?>" readonly required>
                        </div>
						  <div class="form-group">
                            <label for="name">Contact Number:</label>
                            <input type="tel" class="form-control" id="tel" placeholder="Enter your number" name="cno" value="<?php echo $rows['C_number']; ?>" readonly required>
                        </div>
				   <div class="form-group">
                            <label for="name">Hostel:</label>
                            <input type="text" class="form-control" id="hostel" placeholder="Enter your hostel" name="hostel" value="<?php echo $rows['Hostel']; ?>" readonly required>
                        </div>
						  <div class="form-group">
                            <label for="name">Room No.:</label>
                            <input type="number" class="form-control" id="rno" placeholder="Enter your hostel room number" name="rno" value="<?php echo $rows['Room']; ?>" readonly required>
                        </div>
						  <div class="form-group">
                            <label for="name">Block:</label>
                            <input type="text" class="form-control" id="block" placeholder="Enter your hostel block" name="block" value="<?php echo $rows['Block']; ?>" readonly required>
                        </div>
				   <div class="form-group">
                            <label for="comp">Date of Issuing</label>
                            <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date" value="<?php echo date("Y-m-d");?>" readonly required>
                    </div> 
				   <div class="form-group">
                            <label for="compcat">Complaint Category:</label>
                            <input type="text" class="form-control" id="compcat" placeholder="Complaint Category" name="compcat" value="<?php echo $rows['Category']; ?>" readonly required>
                        </div>
				   <div class="form-group">
				   <label for="remark">Remark<b>*</b>:</label>
					   <textarea name="remark" cols="50" rows="2" class="img-responsive" placeholder="Why did you forward this complaint?" required></textarea>
				   </div>
			   <button type="submit" class="btn btn-primary btn-block">Forward to Admin</button>
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
        
        <!------------------------------ SCRIPT---------------------------------------------------------->
       <!-- <script>  
 $(document).ready(function(){  
      $('#submit').click(function(){  
           var name = $('#name').val();  
           var c_no = $('#c_no').val();  
           if(name == '' || message == '')  
           {  
                $('#error_message').html("All Fields are required");  
           }  
           else  
           {  
                $('#error_message').html('');  
               $('#success_message').html("Complaint Saved");
                
           }  
      });  
 }); 
 </script>  -->
    </body>
</html>