
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
  

  
<div class="az-signup-wrapper">
  <div class="az-column-signup-left">
    <div>
      <i class="typcn typcn-chart-bar-outline"></i>
      <h1 style="color:#6058FB">SRS Electrical Appliances</h1>
      
    </div>
  </div><!-- az-column-signup-left -->
  <div class="az-column-signup">
    <h1 style="color:#6058FB">SRS Electrical Appliances</h1>
    <div class="az-signup-header">
      <h2>Get Started</h2>
      <h4>It's free to signup and only takes a minute.</h4>

      <form method="post"  enctype="multipart/form-data">
        <div class="form-group"  >
          <label>Name</label>
          <input type="text" class="form-control" name="t_name" required placeholder="Enter your full name">
        </div><!-- form-group -->
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control" name="t_email" required placeholder="Enter your email">
        </div><!-- form-group -->
        <div class="form-group">
          <label>Age</label>
          <input type="number" class="form-control" name="t_age" required placeholder="Enter your Age">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="t_pass" required placeholder="Enter your password">
        </div>
        <div class="form-group">
          <label>Picture</label>
          <input type="file" name="image" class="form-control">
        </div>
       <!-- form-group -->
        <button type="submit" name="btnsave" class="btn btn-az-primary btn-block">Create Account</button>
       <!-- row -->
      </form>
    </div><!-- az-signup-header -->
    <div class="az-signup-footer">
      <p>Already have an account? <a href="testersignin.php">Sign In</a></p>
    </div><!-- az-signin-footer -->
  </div><!-- az-column-signup -->
</div><!-- az-signup-wrapper -->

<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/ionicons/ionicons.js"></script>
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
if(isset($_POST['btnsave'])){
  include ('dbconnect.php');
  
  $t_name = $_POST['t_name'];
  $t_email = $_POST['t_email'];
  $t_age = $_POST['t_age'];
  $t_pass = $_POST['t_pass'];
  $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "images/".$img_name;
    move_uploaded_file($img_loc,'images/'.$img_name);

  $sql = "INSERT INTO `tester`( `t_name`, `t_email`, `t_age`, `t_pass`, `t_img`) VALUES ('$t_name','$t_email','$t_age','$t_pass','$img_des')";
  $result = $con->query($sql);
  header("location: testersignin.php");
  
}
?>