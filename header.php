<html>
<?php session_start(); ?>
<head>
  <title>Home</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
 
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
      <a class="navbar-brand" href="#">Sweet Bakery</a>
    </div>
	<div class="collapse navbar-collapse" id="mainNavBar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
	  <li><a href="product.php">Product</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="aboutus.php">About Us</a></li>
	  <li><a href="contact.php">Contact</a></li>
    </ul>
	
<ul class="nav navbar-nav navbar-right">
		<?php if(isset($_SESSION['username'])):?>
			
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo "welcome ".$_SESSION['username'] ?>
		<span class="caret"></span></a>
		 <ul class="dropdown-menu">
		 <li><a href="confirm_order.php">Confirm Order</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
		
       
      </li>
	
				<?php else:?>
					 <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					 
				<?php endif; ?>
	</ul>
				
	
     
	
  </div>
  </div>
</nav>
</body>
</html>