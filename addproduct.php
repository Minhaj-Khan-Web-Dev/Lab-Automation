


<?php 
include('dbconnect.php');
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location: userlogin.php");
exit; 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <?php include("header.php") ?>

    <div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-12">
						<!-- Billing Details -->
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Add Product Details</h3>
							</div>
                            <form method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<input class="input" type="text" name="p_name" required placeholder="Product Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="p_desc" required placeholder="Please Specify Your Problem">
							</div>
							<div class="form-group">
								<input class="input" type="file" name="image" required placeholder="">
							</div>
							
					
							<div class="form-group">
								<button class="primary-btn order-submit"  name="btnsave" type="submit"> Add Product </button>
							</div>
							</form>
						</div>
						
						

						
					</div>

					
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>



    <?php include("footer.php")?>
    
</body>
</html>

<?php
if(isset($_POST['btnsave'])){
   
   
    $p_name = $_POST['p_name'];
    $p_desc = $_POST['p_desc'];
    $user = $_SESSION['user'];
    $IMAGE = $_FILES['image'];
      $img_loc = $_FILES['image']['tmp_name'];
      $img_name = $_FILES['image']['name'];
      $img_des = "images/".$img_name;
      move_uploaded_file($img_loc,'images/'.$img_name);
  
    $sql = "INSERT INTO `product`( `p_name`, `p_desc`, `p_img`,`cust_id`) VALUES ('$p_name','$p_desc','$img_des','$user[cust_id]')";
    $res = $con->query($sql);
    if($res){
		header("Location:userhistory.php");
	}else{
		echo "Try Again...";
	}
    
  }
  ?>

