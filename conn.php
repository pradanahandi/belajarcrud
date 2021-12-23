<?php
	$host = "linkendpoint";
	$username = "namausername";
	$password = "passwordanda";
	$database = "namadb";

	$query = mysqli_connect($host,$username,$password,$database);
	if(!$query)
	{
		die();
	}	
?>



