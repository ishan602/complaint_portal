<?php 
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
$s_no = $_GET['id'];
$query = "DELETE FROM complaint WHERE S_no='$s_no'";
$delete="DELETE FROM admin_comp WHERE S_no='$s_no'";
mysqli_query($con,$delete);
if(mysqli_query($con,$query))
    header("refresh:0.2; url=../link/lodge_griveance.php");
else
    echo "Not Deleted";
?>