<?php include ('header.php'); 
$product_id = $_GET['product_id'];

$product_name = $_GET['product_name'];

$price = $_GET['price'];


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=uft-8"/>
	<title>Login Page</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="order.css">
</head>
<body>


		<?php if(isset($_SESSION['id'])):?>
		
		<?php $id=$_SESSION['id']; ?>
		
		<form class="form" action="order_process.php" method="POST">
			<h1>Order</h1><br>
			<h4>Name:</br></h4>
			<input type="text" required="required" name="name"/>
			<h4>Contact:</br></h4>
			<input type="text" required="required" name="contact"/>
			<h4>Address:</br></h4>
			<input type="text"  required="required" name="address"/>
			<input type="hidden"  name="user_id" value="<?php echo $id ;?>"/>
			<input type="hidden"  name="product_id" value="<?php echo $product_id ;?>"/>
			<input type="hidden"  name="product_name" value="<?php echo $product_name ;?>"/>
			<input type="hidden"  name="price" value="<?php echo $price ;?>"/>

			<button type="submit" name="submit">Submit</button>
			
			
		</form>
		<?php else: ?>
		
			<?php
			header( "refresh:0; url= register.php" );
			echo '<script language="javascript">';
			echo 'alert("Please log in to continue")';
			echo '</script>';
			?>
		
		<?php endif; ?>
	
</body>
<?php include 'footer.php' ?>

</html>