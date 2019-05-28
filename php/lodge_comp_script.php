<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
session_start();
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
$email = $_SESSION['email'];
$category = $_POST['category'];
$name = $_POST['name'];
$number = $_POST['c_no'];
$hostel = $_POST['hostel'];
$r_no = $_POST['r_no'];
$block = strtoupper($_POST['block']);
$comp = $_POST['comp'];
$status = 'submitted';
$compno =mt_rand();
$insert_query = "INSERT INTO `complaint`(`comp_no`, `email`, `Category`, `Name`, `C_number`, `Hostel`, `Room`, `Block`, `Complaint`, `Status`) VALUES ('$compno','$email','$category','$name','$number','$hostel','$r_no','$block','$comp','$status')";
if(mysqli_query($con, $insert_query))  
      {  
           $msg = "Complaint Registered";  
          header("location:../link/lodge_griveance.php?msg=".$msg);
          
      } 

}
else
{
    echo "Not allowed to open directly";
}
?>