<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('connect.php');

	//Include functions
	require_once('function.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
	
	//Validation error flag
	$errflag = false;
	
	//Sanitize the POST values
	$fname = clean($conn, $_POST['fname']);
	$lname = clean($conn, $_POST['lname']);
	$login = clean($conn, $_POST['login']);
	$password = clean($conn, $_POST['password']);
	$cpassword = clean($conn, $_POST['cpassword']);
	
	//Input Validations
	if($fname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	if($lname == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
	}
	if(strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM pr_members WHERE login='$login'";
		$result = mysqli_query($conn, $qry);
		if($result) {
			if(mysqli_num_rows($result) > 0) {
				$errmsg_arr[] = 'Login ID already in use';
				$errflag = true;
			}
			@mysqli_free_result($result);
		}
		else {
			die("Query failed: check for duplicate");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../register.php");
		exit();
	}

	//Password encryption
	$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

	//Create INSERT query
	$qry = "INSERT INTO pr_members(firstname, lastname, login, passwd) VALUES('$fname','$lname','$login','$hashedPwd')";
	$result = @mysqli_query($conn, $qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: ../register-success.php");
		exit();
	} else {
		die("Query failed");
	}
?>