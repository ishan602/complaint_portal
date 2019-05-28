<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$con = mysqli_connect("localhost", "root", "", "cp") or die('not working');
$email = $_POST['email'];
$pass = md5($_POST['pwd2']);
$number = $_POST['cno'];
$insert= "INSERT INTO `signup`(`Email`, `Password`, `C_no`) VALUES ('$email','$pass','$number')";
if(mysqli_query($con, $insert))  
      {  
          header('location:../link/post_complaint.php');
          
      } 
else
	echo "fail";
}
?>