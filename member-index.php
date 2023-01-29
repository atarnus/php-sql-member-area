<?php
	require_once('php/auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Member page</title>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="wide">
			<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
			<p class="nav"><a href="order.php">Order</a> | <a href="member-orders.php">Order history</a> | <a href="logout.php">Logout</a></p>
			<h2>Member information</h2>
			<p>
				Name: <?php echo $_SESSION['SESS_FIRST_NAME'],' ',$_SESSION['SESS_LAST_NAME']; ?><br>
				E-mail: <?php echo $_SESSION['SESS_LOGIN'];?>
			</p>
		</div>
	</body>
</html>
