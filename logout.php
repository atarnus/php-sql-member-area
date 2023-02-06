<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	unset($_SESSION['SESS_LOGIN']);

    $title = 'Logged Out';
    require_once('php/head.php');
    include_once('php/navbar.php');
?>
	<body>
		<div class="wide">
			<h1>Logout</h1>
			<h4>You have been logged out.</h4>
		</div>
	</body>
</html>