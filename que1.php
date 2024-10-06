<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="username">
		<input type="text" name="password">
		<input type="submit">
	</form>

		<?php 
		if ($_SERVER['REQUEST_METHOD']=='POST') {
			
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			if ($username=='rohit' && $password=='123') {
				header("location: dashboard.php");
			}
			else{
				echo "not done";
			}
		}
		
		 ?>
</body>
</html>