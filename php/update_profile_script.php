<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
session_start();
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
$email =$_SESSION['email'];
$name = $_POST['name'];
$number = $_POST['cno'];
$gender = $_POST['inlineRadioOptions'];
$hostel = $_POST['hostel'];
$rno = $_POST['r_no'];
$block =strtoupper($_POST['block']); 
$select = "Select * from signup where Email= '$email'";
$select_query = mysqli_query($con,$select);
$no = mysqli_num_rows($select_query);
	if($no==1)
	{
		$update_query = "UPDATE `signup` SET `Name`='$name',`Gender`='$gender',`Hostel`='$hostel',`R_no`='$rno',`Block`='$block' WHERE Email = '$email'";
		if(mysqli_query($con,$update_query))
		{
			$msg = "Updated!!";  
          header("location:../link/update_profile.php?msg=".$msg);
		}
		else
		{
			$imsg = "Not Updated!!";  
          header("location:../link/update_profile.php?imsg=".$imsg);
		}
	}
	else{
		$imsg = "No Such Account Exist";  
          header("location:../link/update_profile.php?imsg=".$imsg);
	}


}
?>