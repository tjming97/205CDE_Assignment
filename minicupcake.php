<head>
  <title>Home</title>
  
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<?php require 'connectDB.php' ?>

<?php 
$sql ="select * from `cake` where `Category` = 'minicupcake'";
$query = mysqli_query($conn, $sql);

?>


<body>

<?php include 'header.php';?>

<link rel="stylesheet" type="text/css" href="housecake.css">

<div class="container">
<h2>MINI CUPCAKE</h2>
<center>____________________________________________________________________________________________________________________________________
</center><br>
<h3>ADORABLE MINI-CUPCAKES FOR YOUR MINIS</h3>
<center>What do mini-cupcakes, baby otters, and ukuleles have in common? They’re all more fun when they’re mini-fied!
 Our mini-cupcakes are perfect for your mini humans, or for moments when your sweet tooth is feeling less than full-sized.</center>

<?php while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){   ?>
<div class="responsive">
  <div class="gallery">
  <?php $product_id=$row['product_id'];
	
	$product_name=$row['product_name'];
	$price=$row['product_price'];

	
	
	?>
  <img  onerror="this.src='unavailable.png' "src="<?php echo $row['product_img'] ?>"  width="300" height="200">
    </a>
     <div class="desc"><?php echo $product_name ?><br>RM <?php echo $row['product_price'] ?><br>
	<a type="button" class="btn btn-info" href="order.php?product_id=<?php echo $product_id;?>&product_name=<?php echo $product_name?>&price=<?php echo $price?>">Order Now</a>
	</div>
  </div>
</div>
<?php }?>



</div>
<?php include 'footer.php' ?>

</body>