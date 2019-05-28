<?php 
session_start();
//error_reporting(0);
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
	$compnum = $_POST['compnum'];
	$comp =$_POST['comp'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$cno = $_POST['cno'];
	$hostel = $_POST['hostel'];
	$rno = $_POST['rno'];
	$block = $_POST['block'];
	$date = $_POST['date'];
	$compcat =$_POST['compcat'];
	$remark = $_POST['remark'];
	$insert = "INSERT INTO `admin_comp`(`C_no`, `Name`, `Email`, `complaint`, `Category`, `Hostel`, `Room`, `Block`, `C_number`, `Date`, `Remark`) VALUES ('$compnum','$name','$email','$comp','$compcat','$hostel','$rno','$block','$cno','$date','$remark')";
	$select ="select * from admin_comp where C_no ='$compnum'";
	$result=mysqli_num_rows(mysqli_query($con,$select));
	if($result==0)
	{
		mysqli_query($con, $insert);
		$update = "UPDATE `complaint` SET `Status`='Forward_to_admin' WHERE comp_no = '$compnum'";
		mysqli_query($con,$update);
		$msg ="Requirement is forwarded to Admin";
			header("location:../link/department_admin.php?msg=".$msg);
	}
	else
	{
		$imsg = "Requirement is already forwarded to admin";
		header("location:../link/department_admin.php?imsg=".$imsg);
	}
}
?>