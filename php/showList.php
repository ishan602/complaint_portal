<?php 
error_reporting(E_ALL);
require 'display.php';
if(isset($_GET['cat']))
{
	$cat = $_GET['cat'];
	$select= "Select * from inventory where Category = '$cat'";
	$result = mysqli_query($con,$select);
	echo "<select id='sel2'>";
	while($row=mysqli_fetch_array($result))
	{
		echo "<option value='$row[Name]'>"; echo $row['Name'];echo "</option>";
	}
	echo "</select>";
}
else
		echo "something went wrong";
?>