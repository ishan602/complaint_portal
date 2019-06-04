<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	require 'display.php';
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$pwd = md5(mysqli_real_escape_string($con,$_POST['pwd']));
	$select_query = "SELECT Email and Password from signup where Email= '$email' and Password = '$pwd'";
	$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
	$total = mysqli_num_rows($select_query_result);
if($total == 1)
{
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $id;
    header('location:../link/lodge_griveance.php');
}
else
{
    $msg = "Authentication Failed";
    header("location:../link/post_complaint.php?msg=".$msg);
}
}
else
    echo "Not Allowed to open directly";
?>

