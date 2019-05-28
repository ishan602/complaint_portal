<?php

    $con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
    //$result = mysqli_query($conn,"SELECT * FROM login where email='$email'");
    //$row = mysqli_fetch_assoc($result);
	$email=$_POST['email'];
	$otp=rand(1000,9999);
setcookie('otp',$otp);
 //$Sql_Query = "UPDATE login SET otp = '$otp' WHERE email='$email'";
 
	    $to = $email;
	    $txt = "Your SMVDU COMPLAINT PORTAL otp is : $otp.";
		
$headers = 'From: NetworkCentre@smvdu.ac.in' . "\r\n" . 
           'MIME-Version: 1.0' . "\r\n" .
           'Content-Type: text/html; charset=utf-8';

if(mail($to, "SMVDU COMPLAINT PORTAL ",$txt, $headers))
{
    $msg = "OTP is sent ot the registered to the mail";
    header("location:..link/verify_otp_mail.php?=".$msg);
}
else
{
    $imsg = "Something went wrong";
    header("location:..link/first_time.php?=".$imsg);
}
var_dump($result);

?>