<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
	//file attributes
	$file_name = $_FILES['file']['name'];
	$file_type = $_FILES['file']['type'];
	$file_size = $_FILES['file']['size'];
	$file_error = $_FILES['file']['error'];
	$file_temp_loc=$_FILES['file']['tmp_name'];
	
	//uploded file validation
	
	$fil_extn = explode('.',$file_name);
	$file_act_extn = strtolower(end($file_extn));
	$allowed =array('jpg','jpeg','png','pdf');
	if(in_array($file_act_extn,$allowed))
	{
		if($file_error ===0)
		{
			if($file_size <1500000)
			{
				$new_file_name = uniqid('',true).".".$file_act_extn;
				$file_store = "../../upload/".$file_name;
				move_uploaded_file($file_temp_loc,$file_store);
				
			}
			else
				echo "Your file size must be less than 1mb.";
		}
		else
			echo "There is an error in uploading your file.";
	}
	else
		echo "You are not allowed to upload this type of file. Allowed format of file are jpeg, jpg, png and pdf.";
	
	
	
	
	//Rest inventory details
	$n = $_POST['name'];
	$cat = $_POST['category'];
	$tu = $_POST['t_units'];
	$mu = $_POST['m_units'];
	$is = $_POST['issued'];
	if($is <= $tu)
	{
		$bal = $tu - $is;
	}else
		echo "Issued Must be less than or equal to Total units brought";
	$date= $_POST['date'];
	$select = "Select * from inventory where Name= '$n'";
	$select_query = mysqli_query($con,$select);
	$no = mysqli_num_rows($select_query);
	if($no ==0 )
	{
		$insert_query = "INSERT INTO `inventory`(`Name`, `Category`, `T_units`, `M_unit`, `Issued`, `Balance`, `Date`) VALUES ('$n','$cat','$tu','$mu','$is','$bal','$date')";
		if(mysqli_query($con, $insert_query))  
		  {  
			   $msg = "Item Added!";  
			  header("location:add_item.php?msg=".$msg);
		  } 
	}
	else
	{
		$imsg = "Item Already Exist!";  
			  header("location:add_item.php?imsg=".$imsg);
	}
}
?>