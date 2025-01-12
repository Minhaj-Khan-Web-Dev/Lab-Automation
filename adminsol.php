
<?php include('dbconnect.php')?>
<?php 
$id = $_GET['Id'];

$query = "select * from product where p_id= '$id'";
$result = $con->query($query);
$row =$result->fetch(PDO::FETCH_ASSOC);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solution Page</title>
</head>
<body>
    <?php include('adminhead.php') ?>

    <div>
              <h2 class="az-dashboard-title text-center pt-3 mt-3">Please Give Solution Of This Product </h2>
             
            </div>

   
            <form method="post">
                <div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" name="p_name" readonly value="<?php echo $row['p_name']; ?>" class="form-control">
    
  </div>
  <div class="form-group" >
    <label for="exampleInputEmail1">Product Problem</label>
    <input type="text" name="p_desc" value="<?php echo $row['p_desc']; ?>"   readonly class="form-control" >
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Solution</label>
    <input type="text" name="p_sol"class="form-control">
  </div>
  
  <button type="submit" name="btnsave"class="btn btn-primary">Submit</button>
</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

    <?php include('adminfooter.php') ?>
</body>
</html>
<?php
if(isset($_POST['btnsave'])){
   
   
    $p_name = $_POST['p_name'];
    $p_desc = $_POST['p_desc'];
    $user = $_SESSION['user'];
    $p_solution = $_POST['p_sol'];
  
    $sql = "UPDATE product SET p_name='$p_name',p_desc='$p_desc',p_solution='$p_solution' WHERE p_id =$id";
    $result = $con->query($sql);
    if($result){
        header('Location:adminindex.php');
    }else{
        echo "try Again";
    }
    
  }
  ?>