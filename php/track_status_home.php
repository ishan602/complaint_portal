<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
$email = mysqli_real_escape_string($con,$_POST['email']);
$c_no = mysqli_real_escape_string($con,$_POST['c_no']);
$select_query = "SELECT Email and C_number from complaint where Email= '$email' and C_number = '$c_no'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total = mysqli_num_rows($select_query_result);
if($total < 1)
{
    
    $msg = "Authentication Failed: Email and Phone Number does not match";
    header("location:../link/track_status.php?msg=".$msg);
}
    else
    {
        $select_query = "select Category, comp_no, Complaint, Status, Time from complaint where Email= '$email' and C_number = '$c_no'";
$result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total = mysqli_num_rows($result) or die(mysqli_error($con));
    }
}
else
    echo "Not Allowed to open directly";
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Complaint portal SMVDU">
    <meta name="keywords" content="SMVDu, complain, complaint, smvdu complain, network centre">
    <meta name="author" content="Network Center Smvdu">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Status Result</title>
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
          <li><a href="download.html">Download</a></li>
        </ul>
    </div>
  </div>
</nav>
        
        <div class="container-fluid home_cover">
            <div class="container-fluid">
           <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12 login">
               <table class="table table-hover table-responsive">
                   <thead>
                   <tr><h3>Previous Complaints</h3></tr>
                   </thead>
                   <thead>
                   <tr>
                       <td><h4>Category</h4></td>
                       <td><h4>Complaint Number</h4></td>
                       <td><h4>Complaint</h4></td>
                       <td><h4>Status</h4></td>
                       <td><h4>Time</h4></td>
                       </tr>
                   </thead>
                   <tbody>
                   <?php 
                       while($rows = mysqli_fetch_array($result))
                           //echo $rows;
                       {?>
                           <tr>
                            <td>
                               <?php echo $rows['Category'];?>
                               </td>
                               <td>
                               <?php echo $rows['comp_no'];?>
                               </td>
                               <td>
                               <?php echo $rows['Complaint'];?>
                               </td>
                               <td>
                               <?php echo $rows['Status'];?>
                               </td>
                               <td>
                               <?php echo $rows['Time'];?>
                               </td>
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

