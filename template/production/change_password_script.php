<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update']))
{
	$email= $_POST['email'];
	$pass = md5($_POST['pwd']);
	$newpass = md5($_POST['pwd1']);
	$select = "SELECT Password from signup  WHERE Email = '$email'";
	$respass=mysqli_query($con, $select);
	if ($pass == $respass)
	{
		$update = "UPDATE signup SET Password= '$newpass' WHERE Email = '$email'";
		mysqli_query($con,$update);	
	}
	else
		$imsg ="Old Password Does't Match";
		header("location:change_password.php?imsg=".$imsg);
}

elseif($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['update_otp']))
{
	$email= $_POST['email'];
	$newpass = md5($_POST['pwd1']);
	try{
		$update = "UPDATE signup SET Password= '$newpass' WHERE Email = '$email'";
		mysqli_query($con,$update);	
		$msg = "Password Updated Successfully";
		header("location:index.php");
	}
	catch(EXCEPTION $e)
	{
		die('Error: '.$e -> getMessage());
		echo "Can't update your password.";
		header("location:otp_new_pass.php");
	}

}
else
	echo "Not allowed to oepn directly";
?>