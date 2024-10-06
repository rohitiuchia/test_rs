
<?php 
include"connection.php";

	
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
<?php 
include "header.php";
include "head.php"
 ?>

</head>

<body>
<center>
	<div class="container" >
		<div class="row">
			<div class="">
				<div class="insta" method>
				<h1 class="mb-5">sign up</h1>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<input type="text" class="mt-3" name="username" placeholder="username">
					<input type="text" class="mt-3"  name="fullname" placeholder="fullname">
					<input type="number" class="mt-3" name="number" placeholder="number">
					<input type="mail" class="mt-3" name="mail" placeholder="mail">
					<input type="password" class="mt-3"  name="password" placeholder="password" class="mt-2">
					<br>
					<input type="submit" value="submit" class="mt-5 bg-primary text-white p-1 rounded" >
				</form>
			</div>

		</div>

	</div>
</center>
	
	

</body>
</html>
