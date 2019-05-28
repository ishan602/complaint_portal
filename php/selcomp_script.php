<?php 
if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
	session_start();
	$selcomp = $_GET['category'];
	echo $selcomp;
	if($selcomp == "NULL")
	{
		$imsg="Please Select One!";
			header("location:../link/compselection.php?imsg=".$imsg);
	}
	elseif($selcomp == "email_faculty")
	{
		header("location:../link/emailfaculty.php");
	}
	elseif($selcomp =="email_student")
		header("location:../link/emailstudent.php");
	elseif($selcomp =="email_to_all")
		header("location:../link/emailtoall.php");
	elseif($selcomp =="computer")
		header("location:../link/computer.php");
	elseif($selcomp =="comp_battery")
		header("location:../link/comp_battery.php");
	elseif($selcomp == "other")
		header("location:../link/lodge_griveance.php");
	else
		echo "Fail";
}
?>