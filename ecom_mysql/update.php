


<?php 
	include"connection.php";

	
	$message='';
	if ($_SERVER['REQUEST_METHOD']=='POST') {
		$oldpassword=$_POST['oldpassword'];
		$newpassword=$_POST['newpassword'];

		$sql='UPDATE user_data set password="'.$newpassword.'" WHERE username="'.$username.'"';

		$result = $connection->query($sql);

    
	}
 ?>



 <!DOCTYPE html>
		<html>
		<head>
			<?php 
             include"head.php";
			 ?>
		</head>
		<body>
		 <center>
 	     <div class="body"style="display: flex;  justify-content: center; margin: 50px;">
 			<div  style="margin-top: 200px;">
			
					<div class="">
						<div class="in">
					<form action="update.php" method="post">
					<h1><i class="text-danger">change password</i></h1>
					<input type="text" name="oldpassword" placeholder="old password" placeholder="old password">
					<input type="password" name="newpassword" placeholder="new password" style="margin-top:20px">
					<input type="text" name="retypepassword" placeholder="re type password"style="margin-top:20px">
					<button type="submit"style="margin-top:10px">submit</button>
			<?=$message;?>
				  </form>
					</div>
			</div>
			</div>
		</div>
	</div>
 	</div>
 </center>
		</body>


</html>