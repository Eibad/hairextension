<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ecommercewebsite";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM user";

	//creating Connection
	$result = mysqli_query($conn, $sql);
	
	
	if(!$conn){
		die("Connection Failed: " . mysqli_connect_error());
	}


 ?>