<?php 
session_start();
error_reporting(0);
$email = $_SESSION['email'];
include_once('../php/display.php');
$select = "SELECT * from complaint";
$result = mysqli_query($con,$select) or die(mysqli_error($con));
$totalrowcount=mysqli_num_rows($result);
$query ="SELECT category FROM login where Email = '$email'";
if($email == 'ih@smvdu.ac.in'){
    $name1 = 'Internet';
    
    $selecth = "SELECT * from complaint where Category = '$name1'";
    $resulth = mysqli_query($con,$selecth) or die(mysqli_error($con));
    $hrowcount=mysqli_num_rows($resulth);
    
    $selectuph = "SELECT * from complaint where Status ='under_process' AND Category ='$name1'";
    $resultuph = mysqli_query($con,$selectuph) or die(mysqli_error($con));
    $uphrowcount=mysqli_num_rows($resultuph);

    $selectsh = "SELECT * from complaint where Status ='solved' AND Category ='$name1'";
    $resultsh = mysqli_query($con,$selectsh) or die(mysqli_error($con));
    $shrowcount=mysqli_num_rows($resultsh);
}
elseif($email=='nh@smvdu.ac.in'){
    $name1='Network';
    $selecth = "SELECT * from complaint where Category = '$name1'";
    $resulth = mysqli_query($con,$selecth) or die(mysqli_error($con));
    $hrowcount=mysqli_num_rows($resulth);
    
    $selectuph = "SELECT * from complaint where Status ='under_process' AND Category ='$name1'";
    $resultuph = mysqli_query($con,$selectuph) or die(mysqli_error($con));
    $uphrowcount=mysqli_num_rows($resultuph);

    $selectsh = "SELECT * from complaint where Status ='solved' AND Category ='$name1'";
    $resultsh = mysqli_query($con,$selectsh) or die(mysqli_error($con));
    $shrowcount=mysqli_num_rows($resultsh);
}
elseif($email=='oh@smvdu.ac.in')
{
    $name1='Other';
    $selecth = "SELECT * from complaint where Category = '$name1'";
    $resulth = mysqli_query($con,$selecth) or die(mysqli_error($con));
    $hrowcount=mysqli_num_rows($resulth);
    
    $selectuph = "SELECT * from complaint where Status ='under_process' AND Category ='$name1'";
    $resultuph = mysqli_query($con,$selectuph) or die(mysqli_error($con));
    $uphrowcount=mysqli_num_rows($resultuph);

    $selectsh = "SELECT * from complaint where Status ='solved' AND Category ='$name1'";
    $resultsh = mysqli_query($con,$selectsh) or die(mysqli_error($con));
    $shrowcount=mysqli_num_rows($resultsh);
}
elseif($email=='admin@smvdu.ac.in')
{
    $name1='Adminstrator';
    $selecth = "SELECT * from complaint where Category = '$name1'";
    $resulth = mysqli_query($con,$selecth) or die(mysqli_error($con));
    $hrowcount=mysqli_num_rows($resulth);
    
    $selectuph = "SELECT * from complaint where Status ='under_process' AND Category ='$name1'";
    $resultuph = mysqli_query($con,$selectuph) or die(mysqli_error($con));
    $uphrowcount=mysqli_num_rows($resultuph);

    $selectsh = "SELECT * from complaint where Status ='solved' AND Category ='$name1'";
    $resultsh = mysqli_query($con,$selectsh) or die(mysqli_error($con));
    $shrowcount=mysqli_num_rows($resultsh);
}
else
    echo "No result";
$name = "SELECT * FROM complaint where Category = '$name1'";
$result_name=mysqli_query($con, $name) or die(mysqli_error($con));
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Department Admin</title>
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
        div.card{
            padding: 10px;
            background: black;
            color:white;
            opacity: 0.7;
        }
        .card1 p i{
            font-size: 30px;
            display: block;
            text-align: center;
        }
        .card1 span{
            text-align: center;
            text-transform: uppercase;
        }
        .card1:hover{
            background-color:white;
            color: black;
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
        <li class="dropdown">
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
        <button class="btn btn-danger" id="logout" style="float:right;margin:5px;"><a href="../php/logout.php"style="text-decoration:none;color:white;">Logout(<?php echo $_SESSION['email'];?>)</a></button>
    </div>
  </div>
</nav>
            <div class="container-fluid home_cover">
                <div class="row card">
            <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="card1"><p><i class="glyphicon glyphicon-alert"></i></p>
                    <span><h3><?php echo $totalrowcount; ?>+</h3><p>Total Complaints</p></span></div>
            </div>
             <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="card1"><p><i class="glyphicon glyphicon-globe"></i></p>
                    <span><h3><?php echo $hrowcount; ?>+</h3><p><?php echo $name1;?> Complaints</p></span></div>
            </div>
            
             <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="card1"><p><i class="glyphicon glyphicon-refresh"></i></p>
                    <span><h3><?php echo $uphrowcount;?>+</h3><p>Under Process</p></span></div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="card1"><p><i class="glyphicon glyphicon-ok-circle"></i></p>
                    <span><h3><?php echo $shrowcount;?>+</h3><p>Solved</p></span></div>
            </div>
            </div>
           <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 login table-responsive">
               <table class="table table-hover" style="text-align:center;">
                   <span id="success_message" class="text-primary"><?php if(isset($_GET['msg'])) echo $_GET['msg'];?></span>
				   <span id="fail_message" class="text-danger"><?php if(isset($_GET['imsg'])) echo $_GET['imsg'];?></span>
                   <thead>
                   <tr><h3>Complaints</h3></tr>
                   </thead>
                   <thead>
                   <tr>
                       <td><h5>C No.</h5></td>
                       <td><h5>Name</h5></td>
                       <td><h5>Phone Number</h5></td>
                       <td><h5>Hostel</h5></td>
                       <td><h5>Room</h5></td>
                       <td><h5>Block</h5></td>
                       <td><h5>Complaint</h5></td>
                       <td><h5>Status</h5></td>
                       <td><h5>Option</h5></td>
					   <td><h5>Solve</h5></td>
                       </tr>
                   </thead>
                   <tbody>
                   <?php 
                       while($rows = mysqli_fetch_array($result_name))
                           //echo $rows;
                       {?>
                           <tr>
                            <td>
                               <?php echo $rows['comp_no'];?>
                               </td>
                               <td>
                               <?php echo $rows['Name'];?>
                               </td>
                               <td>
                               <?php echo $rows['C_number'];?>
                               </td>
                               <td>
                               <?php echo $rows['Hostel'];?>
                               </td>
                               <td>
                               <?php echo $rows['Room'];?>
                               </td>
                               <td>
                               <?php echo $rows['Block'];?>
                               </td>
                               <td>
                               <?php echo $rows['Complaint'];?>
                               </td><td>
                               <?php echo $rows['Status'];?>
                               </td>
                               <?php 
                               echo "<td><a href=info_head.php?id=".$rows['comp_no'].">To Admin</a></td>";
								echo "<td><a href=solve_comp.php?id=".$rows['comp_no'].">Solve Complaint</a></td>";
                               ?>
                       </tr>
                     <?php  }
                       ?>
                   </tbody>
                   </table>
               
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