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
<body>
<div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="adminindex.php" class="az-logo"> SRS Electrical</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="adminindex.php" class="az-logo"><span></span> SRS Electrical</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item active show">
              <a href="adminindex.php" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
            </li>
            <li class="nav-item">
              
                
              
            </li>
            
            
            
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
       
                   
               
          
          
            
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="" alt="">
                </div><!-- az-img-user -->
                <h6><?php echo $_SESSION['t_email'] ?></h6>
                <span>Admin</span>
              </div><!-- az-header-profile -->

              
              <a href="testerlogout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div>
</body>
<script src="back-end/lib/jquery/jquery.min.js"></script>
    <script src="back-end/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="back-end/lib/ionicons/ionicons.js"></script>
    <script src="back-end/lib/jquery.flot/jquery.flot.js"></script>
    <script src="back-end/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="back-end/lib/chart.js/Chart.bundle.min.js"></script>
    <script src="back-end/lib/peity/jquery.peity.min.js"></script>

    <script src="back-end/js/azia.js"></script>
    <script src="back-end/js/chart.flot.sampledata.js"></script>
    <script src="back-end/js/dashboard.sampledata.js"></script>
    <script src="back-end/js/jquery.cookie.js" type="text/javascript"></script>
</html>