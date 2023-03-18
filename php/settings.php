<?php
	define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'login2');

    //Connect to mysql server
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$conn) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysqli_select_db($conn, DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
?>