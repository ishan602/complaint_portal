<?php

$email = mysqli_real_escape_string($_POST['email']);
$password = mysqli_real_escape_string($_POST['pwd']);
if($email == "ishan" && $password == "qwerty")
{
    header('location:http://localhost/Complaint_portal/link/lodge_griveance1.php');
}
else
{
    $msg = "failed";
    header("location:..link/post_complaint.php?mssg".$msg);
}
    
?>