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
	$doi = $_POST['doi'];
	$dcat = $_POST['dcat'];
	$itemused = $_POST['item_used'];
	$quant = $_POST['quantity'];
	$status = $_POST['status'];
	$select ="SELECT * from solved_comp where comp_no = '$compnum'";
	$result = mysqli_num_rows(mysqli_query($con, $select));
	if($result ==0)
	{
		$insert = "INSERT INTO `solved_comp`(`comp_no`, `status`, `c_no`, `Device_category`, `Item_used`, `Quantity`, `Date_of_issuing`) VALUES ('$compnum','$status','$cno','$dcat','$itemused','$quant','$doi')";
		mysqli_query($con,$insert);
		$msg= "Successfully update the complaint";
		header("location:../link/department_admin.php?msg=".$msg);
	}
	else
	{
		$imsg= "Something Went Wrong";
		header("location:../link/department_admin.php?imsg=".$imsg);
	}
	
}
?>


	