
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
		$fullname=$_POST['fullname'];
		$number=$_POST['number'];
		$mail=$_POST['mail'];
		$password=$_POST['password'];


$sql = "INSERT INTO user_data (username, fullname, number, mail, password) values ('$username', '$fullname', $number, '$mail', '$password')" ; 

		$result = $conn->query($sql);

		if ($result > 0) {
			echo "<script type='text/javascript'>alert('ACCOUNT HAS BEEN CREATED');</script>";
			header("location: index.php");
		}
		else{
			echo "<script type='text/javascript'>alert('THERE IS AN ERROR CREATING YOUR ACCOUNT');</script>";
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
					<input type="text" class="mt-3" name="username" placeholder="username">
					<input type="text" class="mt-3"  name="fullname" placeholder="fullname">
					<input type="number" class="mt-3" name="number" placeholder="number">
					<input type="mail" class="mt-3" name="mail" placeholder="mail">
					<input type="password" class="mt-3"  name="password" placeholder="password" class="mt-2">
					<br>
					<input type="submit" value="login" class="mt-5 bg-primary text-white p-1 rounded" >
				</form>
			</div>

		</div>

	</div>
</center>
	
	

</body>
</html>
