<?php 
$con = mysqli_connect("localhost", "root", "", "Cp") or die('not working');
$total = 0;
$dp = "qwerty";
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$cat = mysqli_real_escape_string($con, $_POST['who']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$pwd = md5(mysqli_real_escape_string($con,$_POST['pwd']));
	
		if($cat == 'Network_head')
    	{
    				$verify_query = "SELECT email , password from signup where category = 'network' AND Email='$email' AND password ='$pwd'";
    		$result1= mysqli_query($con, $verify_query) or die(mysqli_error($con));
				$total = mysqli_num_rows($result1);
    		if($total == 1)
				{
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id;
            header('location:../link/department_admin.php');
        		}
    	else
    	{
        $msg ="Authentication Failed";
        header("location:../link/department.php?msg=".$msg);
    	}
		}
	if($cat == 'Internet_head')
    {
     $verify_query ="SELECT email , password from signup where category = 'internet' AND email='$email' AND password ='$pwd'";
    $result1= mysqli_query($con, $verify_query) or die(mysqli_error($con));
    $total = mysqli_num_rows($result1);
        if($total == 1)
        {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id;
            header('location:../link/department_admin.php');
        }
        else
    {
        $msg ="Authentication Failed";
        header("location:../link/department.php?msg=".$msg);
    }
    }
		if($cat == 'other')
    {
     $verify_query ="SELECT email , password from signup where category = 'other' AND email='$email' AND password ='$pwd'";
    $result1= mysqli_query($con, $verify_query) or die(mysqli_error($con));
    $total = mysqli_num_rows($result1);
        if($total == 1)
        {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id;
            header('location:../link/department_admin.php');
        }
        else
    {
        $msg ="Authentication Failed";
        header("location:../link/department.php?msg=".$msg);
    }
    }
		if($cat == 'Administrator')
    {
    $verify_query = "SELECT email , password from signup where category = 'Administrator' AND email='$email' AND password ='$pwd'";
    $result1= mysqli_query($con, $verify_query) or die(mysqli_error($con));
    $total = mysqli_num_rows($result1);
    if($total == 1)
        {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id'] = $id;
            header('location:../template/production/index.php');
        }
    else
    {
        $msg ="Authentication Failed";
        header("location:../link/department.php?msg=".$msg);
    }
    }
	

    

    
    
    
    
}
else
    echo "Not allowed to open directly";
?>