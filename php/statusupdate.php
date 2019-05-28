<?php 
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
$s_no = $_GET['id'];
$xyz ="SELECT Status from complaint where S_no = '$s_no'";
$result = mysqli_query($con,$xyz) or die(mysqli_error($con));
$row = mysqli_fetch_assoc($result);
//echo $row['Status'];
if($row['Status'] == 'submitted')
{
    $update = "UPDATE complaint SET Status = 'under_process' WHERE S_no = '$s_no'";
    $update_query = mysqli_query($con, $update) or die(mysqli_error($con));
}
elseif($row['Status'] == 'under_process')
{
    $update = "UPDATE complaint SET Status = 'Solved' WHERE S_no = '$s_no'";
    $update_query = mysqli_query($con, $update) or die(mysqli_error($con));
}
else
    header("refresh:0.2; url=../link/department_admin.php");
header("refresh:0.2; url=../link/department_admin.php");
?>