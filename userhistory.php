<?php
include ('dbconnect.php');
session_start();
$user = $_SESSION['user'];

$query = "select * from product where cust_id = ".$user['cust_id'];
$res = $con->query($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
  


    <title>User History</title>
</head>
<body>
    <?php include('header.php')?>
<div class="container ">
    <table id="myTable" class="display" >
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Problem</th>
      <th scope="col">Product Solution</th>
    </tr>
  </thead>
  <tbody>


    <?php 
    while($products =$res->fetch(PDO::FETCH_ASSOC))
    {
        ?>
        <tr>
            <td><?php echo $products['p_id'] ?></td>
            <td><?php echo $products['p_name'] ?></td>
            <td><img height="110px" width="110px" src="<?php echo $products['p_img'] ?>" alt=""></td>
            <td><?php echo $products['p_desc'] ?></td>
            <td><?php echo $products['p_solution'] ?></td>
        </tr>
    <?php
}
    
    ?>
    
    
  </tbody>
</table>
</div>

    <?php include('footer.php')?>
</body>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
</html>

