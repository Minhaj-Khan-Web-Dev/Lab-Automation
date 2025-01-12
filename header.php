<!DOCTYPE html>
<?php include('dbconnect.php') ?>



<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>SRS Electrical Appliances</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="front-end/css/bootstrap.min.css"/>
		

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="front-end/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="front-end/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="front-end/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="front-end/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="front-end/css/style.css"/>

		

    </head>
<body>
	
<?php
					session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
	$loggedin=true;
	
	}else{
		$loggedin=false;
	}
	if(!$loggedin){
	echo '
<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 03171164408</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> mk9943301@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Aptech Metro Stargate</a></li>
					</ul>
					
	

			
		<ul class="header-links pull-right">
						
						<li><a href="userlogin.php"><i class="fa fa-user-o"></i> Sign in </a></li>
						<li><a href="usersignup.php"><i class="fa fa-user-o"></i> Sign up</a></li>
						</ul>
					}
					
					
					
					
				</div>
			</div>';
				} 
				if($loggedin){
					echo '
				<!-- HEADER -->
						<header>
							<!-- TOP HEADER -->
							<div id="top-header">
								<div class="container">
									<ul class="header-links pull-left">
										<li><a href="#"><i class="fa fa-phone"></i> 03171164408</a></li>
										<li><a href="#"><i class="fa fa-envelope-o"></i> mk9943301@gmail.com</a></li>
										<li><a href="#"><i class="fa fa-map-marker"></i> Aptech Metro Stargate</a></li>
									</ul>
									
					
				
							
						<ul class="header-links pull-right">
										
										<li><a href="#"><i class="fa fa-user-o"></i>'.$_SESSION['cust_email'].'  </a></li>
										<li><a href="userlogout.php"><i class="fa fa-user-o"></i> Logout</a></li>
										</ul>
									}
									
									
									
									
								</div>
							</div>';
								} 
			
			
echo '
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="">
								<a href="#" class="">
								<h1 class="text-light"  style="color:white; margin-top:15px">SRS Electrical</h1>
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">All Categories</option>
										<option value="1">Category 01</option>
										<option value="1">Category 02</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<h1><a href="addproduct.php" >Add Product</a></h1>

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->
		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="userhistory.php">History</a></li>
						
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>';
		
		
		?>
</body>
<script src="front-end/js/jquery.min.js"></script>
		 <script src="front-end/js/bootstrap.min.js"></script>
		<script src="front-end/js/slick.min.js"></script>
		<script src="front-end/js/nouislider.min.js"></script>
		<script src="front-end/js/jquery.zoom.min.js"></script>
		<script src="front-end/js/main.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>

</html>