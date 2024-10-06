<?php 
$_SERVER['username']="username";


include "connection.php";

	$message='';
	if ($_SERVER['REQUEST_METHOD']=="POST") {
		$username=$_POST['username'];
		$password=$_POST['password'];

		

		$sql='select user_id,username,password from user_data where username="'.$username.'"and password="'.$password.'"'; 

		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			$row =$result->fetch_assoc();
			$_SESSION['username']= $row['username'];
			$_SESSION['user_id']= $row['user_id'];

			if (isset($_SESSION['last_id'])) {
				$last_id=$_SESSION['last_id'];
					header("location: http://localhost/rohit.com/ecom_mysql/productinfo.php?id=$last_id");
				exit;
			} else{
				header("location: index.php");
				exit;
			}
		}
		else{
			$message ="invalid username or password";
		}

	}	
 ?>







 <!DOCTYPE html>
		<html>
		<head>
			<?php 
             include"header.php";
			 ?>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<title>login</title>
			<?php include "head.php"; ?>


		</head>
		<body>
	

		 <center>
 			<div  style="margin-top: 200px;">
			<div class="">
			<div class="">
				<div class="in">
					<form action="login.php" method="post">
					<h1><i class="text-danger">login</i></h1>
					<input type="text" name="username">
					<input type="password" name="password"style="margin-top:20px">
					<button type="submit"style="margin-top:10px">login</button>
						<?=$message;?>
					
				  </form>
		
				</div>
			</div>
		</div>
	</div>
 </center>
		</body>


</html>