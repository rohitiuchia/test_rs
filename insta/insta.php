<?php 
session_start();
	
if (isset($_SESSION['username'])) {
		header("location:inside.php");
	}
	$error='';	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
			$username = $_POST['user'];
			$password = $_POST['pass'];

			if ($username == 'admin' && $password == '123') {
				$error = 'username & password matched';
				header('location:inside.php');
				$_SESSION['username']=$username;
			}
			else{
				$error = 'username & password does not matched';
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
		height: 400px;
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
		span{
			position: absolute;
			left: 430px;
			top: 120px;
		}
		#anymate{
			background-image: url('1.png');
			background-size: cover;

		}

	
</style>

</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<div class="in">
					<img src="insta.png">
					<span id="anymate">
						<img src="1.png">
					</span>
				</div>
			</div>
			<div class="col-6">
				<div class="insta" method>
				<h1 class="mb-5">instagram</h1>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" name="user">
					<input type="password" name="pass">
					<br>
					<input type="submit">
				</form>
				<?php echo $error; ?>
				<p class="mt-3">OR</p>
				<p class="text-info">log in with facebook</p>
				<p class="text-info">forget pasword</p>
				</div>
				<div class="mt-5" style="border: 1px solid gray; width:	350px;">
					<p class="pt-4 text-center">dont have an account?s sign up</p>
				</div>
			</div>

		</div>

	</div>
	
	 <script type="text/javascript">
	 	setInterval(() =>{
	 		src=document.getElementById('anymate').src;
	 		if(src== 'http://localhost/rohit.com/insta.php/1.png'){
	 			src='http://localhost/rohit.com/insta.php/2.png';

	 		}
	 		else{
	 			src='http://localhost/rohit.com/insta.php/1.png';
	 		}
	 	},1000);
	 </script>

</body>
</html>
