<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	unset($_SESSION['SESS_LOGIN']);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Logged Out</title>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="wide">
			<h1>Logout</h1>
			<h4>You have been logged out.</h4>
			<p>Click here to <a href="login.php">Login</a></p>
		</div>
	</body>
</html>