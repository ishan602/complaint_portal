<?php 
session_start();
error_reporting(0);
$email = $_SESSION['Email'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Change Password</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
<link rel="icon" href="../../img/smvdulogo.png" type="image/ico" />
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="change_password_script.php" method="post">
              <h1>Change Password</h1>
              <div>
                <input type="password" class="form-control" placeholder="New Password" name="oldpass" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Re Enter New Password" name="newpass" required="" />
              </div>
              <div>
                <button class="btn-primary btn submit">Update</button>
              </div>

             

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2019 All Rights Reserved. SMVDU Network Center. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
