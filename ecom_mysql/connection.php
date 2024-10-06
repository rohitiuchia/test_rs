<?php 
session_start();
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


	function is_login(){
		if (issset($_SESSION['username'])) {
			
			return true;

		}
		else{
				false;
			}
	}