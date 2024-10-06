<?php 
	$servername ="localhost";
	$username ="root";
	$password ="";
	$database ="r_com";

	//creat connection

	$conn =new mysqli($servername, $username, $password, $database);

	//check connection
	if($conn->connect_error){
		die("connectoin failed:".$conn->connect_error);
	}

	
	$message='';
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql='select username,password from r_007 where username="'.$username.'"and password="'.$password.'"';

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$message ='login done';
		}
		else{
			$message ='login failed';
		}
	}
 ?>







 <!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			
			<title>instagram</title>
				<!-- Latest compiled and minified CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

		<!-- Latest compiled JavaScript -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


		</head>
		<style type="text/css">
			body{
				display: flex;
				justify-content: center;
				margin: 50px;


			}

			.in{
					border:  2PX solid gray;
					height: 400px;
					width: 300px;
					border-radius: 10px;
					padding: 40px;	
			}

			#user{
			
			
				width: 200px;
			}
			.pass{
				
				width: 200px;
			}
			#log{
				height: 40px;
			}
		</style>
		<body>
		<div class="row">
			<?=$message;?>
			<div class="insta">
				<div class="in ">
					<form action="index.php" method="post">
					<h1><i class="text-danger">INSTAGRAM</i></h1>
					<input type="text" name="username" >
					<input type="password" name="password">
					<button type="submit">login</button>
				  </form>
		
			</div>
			</div>
	
	
</body>
</html>