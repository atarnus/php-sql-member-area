<?php
	session_start();
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		header("location: login.php");
	}
    $title = 'Home';
    require_once('php/head.php');
    include_once('php/navbar.php');
?>

	<body>
		<div class="wide">
            <h1>Member Profile</h2>
			<p>
				Name: <?php echo $_SESSION['SESS_FIRST_NAME'],' ',$_SESSION['SESS_LAST_NAME']; ?><br>
				E-mail: <?php echo $_SESSION['SESS_LOGIN'];?>
			</p>
            <p>
                <a href="profile.php">Change your details</a>
            </p>
		</div>
	</body>
</html>
