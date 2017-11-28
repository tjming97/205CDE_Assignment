<head>
  <title>Home</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>

<body>

<?php include 'header.php';?>
<?php require 'connectDB.php' ?>

<link rel="stylesheet" type="text/css" href="housecake.css">

<div class="container">


<h2>HOUSE CAKES</h2>
<center>____________________________________________________________________________________________________________________________________
</center><br>
<h3>CELEBRATE YOUR MILESTONES WITH THE VERY BEST</h3>
<center>Here at the Sweet Bakery, cake isn’t just a cake. It’s a milestone birthday, a graduation, a baby shower or a wedding celebration. 
We don’t take your brightest moments lightly. We celebrate the best way a bakery can: with our finest buttercreams, the sweetest strawberries, 
and the most colorful jimmies we can find!</center>

<div class="responsive">
<?php 
$sql ="select * from `cake` where `Category` = 'housecake'";
$query = mysqli_query($conn, $sql);

?>

<?php while ($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){   ?>
  <div class="gallery">
    <a href="#">
	
      <img  onerror="this.src='unavailable.png' "src="<?php echo $row['product_img'] ?>"  width="300" height="200">
    </a>
	
    <div class="desc">Birthday cake<br>RM 40
	</div>
  </div>
  
<?php }?>
  
  
  
</div>
</div>
</body>