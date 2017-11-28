<?php

require 'connectDB.php';

$name=$_POST['name'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$user_id=$_POST['user_id'];
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$price=$_POST['price'];


$sql="INSERT into `customer_order` (name, contact, quantity,location,user_id,product_id,product_name,price)VALUES ('$name','$contact','1','$address','$user_id','$product_id','$product_name','$price')";


if(mysqli_query($conn, $sql)){
			header( "refresh:0; url= confirm_order.php" );
			echo '<script language="javascript">';
			echo 'alert("Order Sucess")';
			echo '</script>';
			
	
		
}
else{
			header( "refresh:0; url= product.php" );
			echo '<script language="javascript">';
			echo 'alert("Order Failed")';
			echo '</script>';
}
		


	




?>