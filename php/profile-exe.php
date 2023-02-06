<?php
	//Start session
	session_start();
	
	//Include database connection details
	require_once('connect.php');

	//Include functions
	require_once('function.php');

    //Validation error flag
    $errflag = false;

    //Define variable for member id
    $memberid = $_SESSION['SESS_MEMBER_ID'];

    //Clean the inserted fields and set first character to uppercase
    $firstname = clean($conn, $_POST['firstname']);
    $lastname = clean($conn, $_POST['lastname']);
    $login = clean($conn, $_POST['login']);

    //Find empty fields and flag them as errors
    if ($firstname == '') {
        $errmsg_arr[] = 'First name missing';
        $errflag = true;
    }
    if ($lastname == '') {
        $errmsg_arr[] = 'Last name missing';
        $errflag = true;
    }
    if ($login == '') {
        $errmsg_arr[] = 'E-mail / Login missing';
        $errflag = true;
    }

    	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: ../profile.php");
		exit();
	}

    $qry = "UPDATE pr_members SET firstname='$firstname', lastname='$lastname', login='$login' WHERE member_id='$memberid'";
    $result = @mysqli_query($conn, $qry);

    //Check whether the query was successful or not
    if ($result) {
        //Update for the session
        $_SESSION['SESS_FIRST_NAME'] = $firstname;
        $_SESSION['SESS_LAST_NAME'] = $lastname;
        $_SESSION['SESS_LOGIN'] = $login;
        //Direct to member index page
        header("location: ../index.php");
        exit();
    } else {
        die("Query failed");
    }

?>