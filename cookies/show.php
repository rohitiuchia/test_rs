w<?php 

	if (count($_COOKIE) >0) {
		echo "cookies are enabled.";

	}else
	{
		echo "cookies are disabled.";

	}
	echo "<hr>";
	echo $_COOKIE['name'];
 ?>