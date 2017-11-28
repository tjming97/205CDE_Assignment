<?php include "header.php";

require "connectDB.php";	
if(isset($_SESSION['id']))
{
	$id=$_SESSION['id']; 
}

$sql="SELECT * FROM customer_order WHERE user_id=$id";
$result=mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
 <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

<br/><br/>
<div class="container-fluid">
  <h2>Order Status</h2>
  
  <table class="table">
    <thead>
      <tr>
	   <th>ORDER ID</th>
		<th>User ID</th>
        <th>Product Name</th>
		<th>Price(RM)</th>
		<th>Contact Name</th>
		<th>Contact</th>
		<th>Address</th>
      </tr>
    </thead>
    <tbody>
	
	<?php while ($row = mysqli_fetch_assoc($result)){   ?>
      <tr>
		<?php 
		$product_id = $row['product_id'];
		$customer_order_id = $row['id'];	
		?>
	    <td><?php echo $row['id']?></td>
	    <td><?php echo $row['user_id']?></td>
		<td><?php echo $row['product_name']?></td>
        <td><?php echo $row['price']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['contact']?></td>
		<td><?php echo $row['location']?></td>

		<td><a href="delete.php?id=<?php echo $row['id']?>" type="button"class="btn btn-info">Delete</a></td>
		</tr>
	   <?php }?>
    </tbody>
  </table>
  
  
 
</div>
</body>
</html>
