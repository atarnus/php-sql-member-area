<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('../../../settings.php');

	//Include functions
	require_once('function.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Sanitize the POST values
	$login = clean($conn, $_POST['login']);
	$password = clean($conn, $_POST['password']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../login.php");
		exit();
	}
	
	//Create query
	$qry = "SELECT * FROM pr_members WHERE login='$login'";
	$result = mysqli_query($conn, $qry);
	$member = mysqli_fetch_assoc($result);

	//Check whether the query was successful or not
	if($result) {
		//Check whether there is a single matching result and the entered password matches
		if(mysqli_num_rows($result) == 1 && password_verify($password, $member['passwd'])) {

			//Login Successful
			session_regenerate_id();

			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['firstname'];
			$_SESSION['SESS_LAST_NAME'] = $member['lastname'];
			$_SESSION['SESS_LOGIN'] = $member['login'];
			session_write_close();
			header("location: ../index.php");
			exit();

		} else {
			//Login failed
			header("location: ../login-failed.php");
			exit();
		}

	} else {
		die("Query failed");
	}
?>