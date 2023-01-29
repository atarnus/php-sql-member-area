<?php
	require_once('php/auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Member page</title>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div class="med">
			<h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
			<p class="nav"><a href="member-index.php">Profile</a> | <a href="order.php">Make an Order</a> | <a href="member-orders.php">Order history</a> | <a href="logout.php">Logout</a></p>
			<h2>Thank you!</h2>
			<p>Your order has been places succesfully. Thank you for your order.</p>
		</div>
	</body>
</html>