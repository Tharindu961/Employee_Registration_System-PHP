<?php 

	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "emp";

	$connect = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if(mysqli_connect_errno()){
		die('database connection failed'.mysqli_connect_error());
	}else{
	}
	



 ?>