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
	
	//Sanitize text field POST values
	$name = clean($conn, $_POST['name']);
	$note = clean($conn, $_POST['note']);

    //Define other values
    $size = $_POST['size'];
    $pizza = $_POST['pizza'];

    //Check if checkboxes are checked or not
    $extra1 = checkbox('extracheese');
    $extra2 = checkbox('garlic');
    $extra3 = checkbox('oregano');

	//Input Validations
	if($name == '') {
		$errmsg_arr[] = 'Insert customer name';
		$errflag = true;
	}
    if($size == '') {
        $errmsg_arr[] = 'Choose the size';
		$errflag = true;
    }
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: order.php");
		exit();
	}
	
	//Current date and time for INSERT query
	$date = date("Y-m-d");
	$time = date("H:i:s");

	//Create INSERT query
	$memberid = $_SESSION['SESS_MEMBER_ID'];
	$qry = "INSERT INTO pr_orders(member_id, order_customer_name, order_product, order_size, e1_extracheese, e2_garlic, e3_oregano, order_note, order_date, order_time) VALUES('$memberid','$name','$pizza','$size','$extra1','$extra2','$extra3','$note','$date','$time')";
	$result = @mysqli_query($conn, $qry);
	
	//Check whether the query was successful or not
	if($result) {
		header("location: ../thank-you.php");
		exit();
	} else {
		die("Query failed");
	}
?>