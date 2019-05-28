<?php
	session_start();
require("../../php/php-in/textlocal.class.php");
	if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sendotp']))
	{
		$Textlocal = new Textlocal(false, false, 'shD10rw6VGE-0wcoU4Yh6WF4oV7r1Hq5EmxJ8Diwez');
 
	$numbers = array($_POST['cno']);
	$sender = 'TXTLCL';
	$otp = mt_rand(10000,99999);
	$message ="Hello ".$_POST['email']. ' OTP to reset your password is: ' . $otp;
 	try{
		$response = $Textlocal->sendSms($numbers, $message, $sender);
		setcookie('otp',$otp); 	
		print_r($response);
		$msg = "OTP is successfully send to your registered mobile number";
		header("location:verify_otp.php?msg=".$msg);
	}	
		catch(EXPECTION $e)
		{
			die('Error: '.$e -> getMessage());
		}
	}
	
	elseif($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['verifyotp']))
	{
		$otp =$_POST['eotp'];
		if($_COOKIE['otp']==$otp)
		{
			header("location:otp_new_pass.php");
		}
		else
		{
			$imsg="Please enter the valid OTP";
			header("location:verify_otp.php?imsg=".$imsg);
		}
	}
	else
		echo "Not Allowed to open Directly";
?>