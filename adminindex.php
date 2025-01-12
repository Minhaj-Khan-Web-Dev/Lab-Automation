<?php include('dbconnect.php') ?>
<?php 
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location: testersignin.php");
exit; 
}
$query = "select * from product";
$res = $con->query($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php include('adminhead.php')?>
    <br>
<br>
<br>
    <div>
              <h2 class="az-dashboard-title text-center">Hi, welcome back!  <?php echo $_SESSION['t_email'] ?></h2>
             
            </div>
            <br>
<br>
<br>
            <div class="table-responsive container">
            <table class="table table-hover mg-b-0">
              <thead>
              <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Problem</th>
      <th scope="col">Product Solution</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Give Solution</th>
      
    </tr>
              </thead>
              <tbody>
              <?php 
             
    while($row =$res->fetch(PDO::FETCH_ASSOC))
    {
         ?>
        <tr>
            <td><?php echo $row['p_id'] ?></td>
            <td><?php echo $row['p_name'] ?></td>
            <td><img height="100px" width="100px" src="<?php echo $row['p_img'] ?>" alt=""></td>
            <td><?php echo $row['p_desc'] ?></td>
            <td><?php echo $row['p_solution'] ?></td>
            <td><?php echo $row['cust_id'] ?></td>
            <td><a class="btn btn-secondary pd-x-10" style="border-radius: 10px;" href="adminsol.php?Id=<?php echo $row['p_id']?>"> Give Solution</a></td>
       </tr>
    <?php
 }
    
     ?>
                
              </tbody>
            </table>
          </div><!-- table-responsive -->


        
<br>
<br>
<br>
<br>
<br>
    <?php include('adminfooter.php')?>
</body>
</html>







