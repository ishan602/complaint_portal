<?php 
session_start();
error_reporting(0);
$email = $_SESSION['email'];
include_once('../php/display.php');
$query ="SELECT S_no, Complaint , Status FROM complaint where email = '$email'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
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
            background-color: black;
            color:white;
            border: 2px solid white;
            border-radius:5px;
            opacity:0.7;
            text-align: center;
        }
        .form{
            text-align: left;
            
        }
        tr:hover{
            color:black;
            background-color: white;
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
        <li class="active"><a href="../index.php">Home</a></li>
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
            <li><a href="update_profile.php" target="_parent">Update Profile</a></li>
            <li><a href="change_password.php" target="_parent">Change Password</a></li>
            </ul>
          </li>
        </ul>
        <a href="../php/logout.php"style="text-decoration:none;color:white;"><button class="btn btn-danger" id="logout" style="float:right;margin:5px;">Logout(<?php echo $_SESSION['email'];?>)</button></a>
    </div>
  </div>
</nav>
        
        <div class="container-fluid home_cover">
            <div class="container-fluid">
           <div class="row">
                <div class="col-md-5 col-sm-3 col-xs-12 login">
               <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12"><figure>
                 <img src="../img/smvdulogo.png" class="" height="50px" widht="50px"/>
                </figure></div>
                   <div class="col-md-offset-1 col-sm-offset-1 col-md-8 col-sm-8 col-xs-12" style="font-size:20px;">
                   <b>Shri Mata Vaishno Devi University</b>
                   </div>
                    </div><br>
                    <center><h4>Lodge Complaint</h4></center>
                <div class="form">
                    <form method="POST" action="../php/lodge_comp_script.php">
                        <span id="error_message" class="text-danger"><?php if(isset($_GET['imsg'])) echo $_GET['imsg'];?></span>  
                     <span id="success_message" class="text-primary"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></span>
                        <div class="form-group">
                        <label for="sel1">Category</label>
                        <select class="form-control" id="sel1" name="category" required>
                                <option value="Network">Network complaint</option>
                                <option value="Internet">Internet complaint</option>
                                <option value="Electric">Electric complaint</option>
                                <option value="Other">Other</option>
                        </select>
                        </div>
                    <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
                        </div>
                    <div class="form-group">
                            <label for="c_no">Contact No.</label>
                            <input type="tel" class="form-control" id="c_no" placeholder="Enter phone number" name="c_no" size="10" id="c_no" required>
                    </div>
                        <div class="form-group">
                            <label for="hostel">Hostel</label>
                            <select class="form-control" id="sel2" name="hostel" required>
                                <option value="Nilgiri">Nilgiri</option>
                                <option value="Basholi Boys Hostel">Basholi Boys Hostel</option>
                                <option value="Vindhyanchal">Vindhyanchal</option>
                                <option value="Trikuta">Trikuta</option>
                                <option value="Klash Hostel">Klash Hostel</option>
                                <option value="Shivalik Hostel">Shivalik Hostel</option>
                                <option value="Vaishnavi Hostel">Vaishnavi Hostel</option>
                                <option value="Faculty Residence">Faculty Residence</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="r_no">Room No.</label>
                            <input type="number" class="form-control" id="r_no" placeholder="Enter Room number" name="r_no" size="3" required>
                    </div>
                        <div class="form-group">
                            <label for="block">Block</label>
                            <input type="text" class="form-control" id="block" placeholder="Enter Block" name="block" required>
                    </div>
                           <div class="form-group">
                            <label for="comp">Complaint</label>
                            <input type="text" class="form-control" id="comp" placeholder="Enter Complaint" name="comp" required>
                    </div>   
                <button type="submit" class="btn btn-primary btn-block" id="submit">Submit</button>
                        <button type="reset" class="btn btn-block btn-danger">Cancel</button><hr>
                    </form>
                    </div>
               </div>
               <div class="col-md-7 col-sm-9 col-xs-12 login table-responsive">
               <table class="table table-hover">
                   <thead><h3>Previous Complaint</h3></thead>
                   
                   <tr>
                       <td><h4>Complaint Number</h4></td>
                       <td><h4>Complaint</h4></td>
                       <td><h4>Status</h4></td>
                       <td><h4>Option</h4></td>
                       <td><h4>Pdf</h4></td>
                       </tr>
                   
                   <tbody>
                   <?php 
                       while($rows = mysqli_fetch_array($result))
                           //echo $rows;
                       {?>
                           <tr>
                            <td>
                               <?php echo $rows['S_no'];?>
                               </td>
                               <td>
                               <?php echo $rows['Complaint'];?>
                               </td>
                               <td>
                               <?php echo $rows['Status'];?>
                               </td>
                            <?php 
                               echo "<td><a href=../php/delete.php?id=".$rows['S_no'].">Delete</a></td>"; ?>
                               <br />
                               <?php
                               echo "<td><a href=../php/Ack_Comp.php?id=".$rows['S_no'].">Download</a></td>";
                               ?>
                               </tr>
                     <?php  }
                       ?>
                   </tbody>
                   </table>
               
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