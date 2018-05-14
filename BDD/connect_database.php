<?php 

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	$dbServername = 'localhost';
	$dbUsername = 'root';
	$dbPassword = 'root';
	$dbName = 'Site';

	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

?>