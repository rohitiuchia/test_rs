
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

	
	$error='';
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$username=$_POST['username'];
		$password=$_POST['password'];

		$sql='select username,password from user_data where username="'.$username.'"and password="'.$password.'"';

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$error ='login done';
		}
		else{
			$error ='login failed';
		}
	}
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


<style type="text/css">
	

	.insta{
		border: 3px solid gray;
		height: 500px;
		px;
		width: 350px;
		border-radius: 10px;
		margin-top: 100px;
		text-align: center;

	}
	.in{
		margin-top: 100px;
		padding-left: 200px;
		}

		.login{
			width: 200px;
			margin-top: 10px;
			background-color: #4BB4F8;
			border-radius: 10px;

		}
		

	
</style>

</head>

<body>
<center>
		<div class="container" >
		<div class="row">
			<div class="">
				<div class="insta" method>
				<h1 class="mb-5">instagram</h1>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" name="username" placeholder="username" >
					<input type="password" name="password" placeholder="password" class="mt-2">

					<br>
					<input type="submit" value="login" class="mt-3" >
				</form>
				<?php echo $error; ?>
				<p class="mt-3">OR</p>
				<p class="text-info">log in with facebook</p>
				<p class="text-info">
					<a href="forgett.php">forget pasword</a>
				</p>
				<p> <a href="#">creat account</a> </p>
				</div>
				
				<div class="mt-5" style="border: 1px solid gray; width:	350px;">
					<p class="pt-4 text-center">dont have an account?s <a href="sign_in.php">sign up</a></p>
					
				</div>
			</div>

		</div>

	</div>
</center>
	
	

</body>
</html>
