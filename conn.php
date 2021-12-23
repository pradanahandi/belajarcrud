<?php
	$host = "dbpegwai.cwbsliexfyow.us-east-2.rds.amazonaws.com";
	$username = "admin";
	$password = "admin122";
	$database = "pegawai";

	$query = mysqli_connect($host,$username,$password,$database);
	if(!$query)
	{
		die();
	}	
?>



