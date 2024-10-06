<?php 

$server="localhost";
$username="root";
$password="";
$database="r_com";

$conn=new mysqli($server,$username,$password,$database);
if ($conn->connect_error) {
	die("connection error".$conn->connect_error);
}
$sql="SELECT * FROM product";

$result=$conn->query($sql);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 <table width="100%" border="1">
 	<tr >
 		<td width="20%">id</td>
 		<td width="20%">img</td>
 		<td width="20%">name</td>
 		<td width="20%">price</td>
 		<td width="20ww%">description	</td>
 	</tr>
 	<?php foreach ($result as $row){?>
    <tr>
    	<td><?php echo $row['product_id'] ?></td>
    	<td><img src="<?php echo $row['product_img']?>" width="25%"></td>
    	<td><?php echo $row['product_name'] ?></td>
    	<td><?php echo $row['product_price'] ?></td>
    	<td><?php echo $row['product_description'] ?></td>
    </tr>
<?php
 	}?> 
 	</table>

 </body>
 </html>