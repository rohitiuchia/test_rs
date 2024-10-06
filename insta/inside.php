<?php 
	session_start();
	


	if (!isset($_SESSION['username'])) {
		header("location: insta.php");
	}
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	<script type="text/javascript">
 		function logout() {
 			<?php session_destroy();

 			
 		
 			?>
 		}
 	</script>
 </head>
 <body>
 	<h1>hello, <?= $_SESSION['username']?></h1><br>
 	<a href="insta.php" onclick="logout()">logout</a>


 </body>
 </html>
