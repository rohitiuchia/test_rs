<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>prime</title>
</head>
<body>
	<form action ="<?php $_SERVER['PHP_SELF']  ?>" method="post" >
		<input type="number" name="prime">
		<input type="submit">
	</form>
	<?php 
	if ($_SERVER['REQUEST_METHOD']=='POST') {
	$flag=true;

	$n=$_POST['prime'];
	$hf=intval($n/2);
	for ($i=2; $i <=$hf ; $i++) { 
		$r=$n%2;
		if ($r==0) {
			$flag="false";
			break;

		}
	}
	if ($flag=="true") {
		echo "prime";
	}
	else
	{
		echo "not prime";
	}

	}
	 ?>
	
</body>
</html>	

	
	