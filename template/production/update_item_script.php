<?php 
if ($_SERVER['REQUEST_METHOD'] === 'GET')
{
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
$n = $_GET['name'];
$cat = $_GET['category'];
$tu = $_GET['t_units'];
$mu = $_GET['m_units'];
$is = $_GET['issued'];
$bal = $tu - $is;
$date= $_GET['date'];
$select = "Select * from inventory where Name= '$n'";
$select_query = mysqli_query($con,$select);
$no = mysqli_num_rows($select_query);
if($no ==1 )
{
	$update_query = "UPDATE `inventory` SET `Name`='$n',`Category`='$cat',`T_units`='$tu',`M_unit`='$mu',`Issued`='$is',`Balance`='$bal',`Date`='$date' WHERE Name= '$n'";
	if(mysqli_query($con, $update_query))  
      {  
           $msg = "Item Updated!";  
          header("location:update_item.php?msg=".$msg);
      } 
}

else
{
	$imsg = "Item Does't Exist!";  
          header("location:update_item.php?imsg=".$imsg);
}

}

?>