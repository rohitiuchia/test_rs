	
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
 	<style type="text/css">
 		.container{
 			width: 50%;
 			height: 300px;
 			margin: auto;
 			text-align: center;
 			border: 1px solid gray;
 			margin-top: 50px;

 		}
 		input[type="file"]{
 			margin: 20px;
 		}
 		button:hover{
 			background-color: #0056b3;
 		}
 		.photo{
 			width: 150px;
 			height: 150px;
 			border: 1px solid gray;
 		
   			
   		
    		overflow: clip;


 		}

 	</style>
 	<?php 
if($_SERVER['REQUEST_METHOD']== 'POST'){

	/*$target_dir = "assets/img/";*/ // location of upload file
	$target_file= /*$target_dir .*/ $_FILES["fileupload"]["name"];
	$uploadok =true;

	if(isset($_POST['submit'])){
		$check =filesize($_FILES["fileupload"]["tmp_name"]);

		if($uploadok == false){
			echo "sorry your file was not opload";
		}
		else{
			move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);

		}
	}
}


 ?>
 </head>
 <body>
 	<div class="container">
 		<h2>UPLOAD IMAGE</h2>
 		<form action="handingupload.php" method="post" enctype="multipart/form-data">
 			<input type="file" name="fileupload" id="fileupload">
 			<button type="submit" name="submit">upload image</button>
 		</form>
 	<center>
 		<div class="photo rounded-circle"  >
 		<?php 
 		if (!empty($target_file) &&file_exists($target_file)) {
 			echo '<img src="'.$target_file.'"height="100%">';
 		}
 		 ?>
 		</div>
 	</center>
 		
 	</div>
 </body>
 </html>
 
