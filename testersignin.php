<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>SRS Electrical Appliances</title>

    <!-- vendor css -->
    <link href="back-end/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="back-end/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="back-end/lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="back-end/lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="back-end/css/azia.css">

  </head>
  <body class="az-body">

  
</div>
<div class="az-signin-wrapper">
  <div class="az-card-signin">
    <h1 style="color:#6058FB">SRS Electrical Appliances</h1>
    <div class="az-signin-header">
      <h2>Welcome back!</h2>
      <h4>Please sign in to continue</h4>

      <form method="post" action="testersignin.php">
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="t_email" class="form-control" placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="t_pass" class="form-control" placeholder="Enter your password" >
        </div><!-- form-group -->
        <button type="submit"  class="btn btn-az-primary btn-block">Sign In</button>
      </form>
    </div><!-- az-signin-header -->
    <div class="az-signin-footer">
      <p><a href=""></a></p>
      <p> <a href="testersignup.php">Create an Account</a></p>
    </div><!-- az-signin-footer -->
  </div><!-- az-card-signin -->
</div><!-- az-signin-wrapper -->

<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/ionicons/ionicons.js"></script>
<script src="../js/jquery.cookie.js" type="text/javascript"></script>
<script src="../js/jquery.cookie.js" type="text/javascript"></script>

<script src="../js/azia.js"></script>
<script>
  $(function(){
    'use strict'

  });
</script>
</body>
</html>

<?php 

if($_SERVER["REQUEST_METHOD"]== "POST"){
  
  include ('dbconnect.php');
  $t_email = $_POST['t_email'];
  $t_pass = $_POST['t_pass'];
  
  $query = "Select * from tester where t_email='$t_email' AND t_pass='$t_pass'";
$res = $con->query($query);


$rowCount = $res->rowCount();
if($rowCount == 1){
 
  session_start();
  $_SESSION['loggedin'] = true;
  $_SESSION['t_email'] = $t_email;
  
  header("location: adminindex.php");

}else{
  echo "invalid";
}

}



?>