<?php
$con = mysqli_connect("localhost", "", "", "") or die('not working');
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verifyotp']))
	{
		$otp =$_POST['eotp'];
		if($_COOKIE['otp']==$otp)
		{
			header("location:../link/otp_new_pass.php");
		}
		else
		{
			$imsg="Please enter the valid OTP";
			header("location:../link/verify_otp.php?imsg=".$imsg);
		}
	}
	else
		echo "Not Allowed to open Directly";
?>