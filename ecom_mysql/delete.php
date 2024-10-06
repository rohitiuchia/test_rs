<?php 

include "connection.php";


	$product_id =$_POST['product_id'];
	$user_id =$_SESSION['user_id'];

	$remove ="DELETE FROM user_cart WHERE user_id =$user_id AND product_id= $product_id ";

		$conn->query($remove);

		header("location: cart.php");
 ?>