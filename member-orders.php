<?php
    //Check login
	require_once('php/auth.php');

    //Connection and databse details
    require_once('php/connect.php');

    //Get member ID from session
    $memberid = $_SESSION['SESS_MEMBER_ID'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Order history</title>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
        <div class="wide">
            <h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
            <p class="nav"><a href="member-index.php">Profile</a> | <a href="order.php">Order</a> | <a href="logout.php">Logout</a></p>
            <h2>Order history</h2>
            <p>
                <table>
                    <?php
                        //Query for fetching details for orders - newest first
                        $sql = "SELECT * FROM pr_orders WHERE member_id=$memberid ORDER BY order_id DESC";
                        $result = mysqli_query($conn, $sql);
                        $resultCheck = mysqli_num_rows($result);

                        //Checking if any orders are found for the member id
                        if ($resultCheck > 0) {

                            //Print the colum headings if any orders found
                            echo '<tr><th>Order #:</th><th>Customer:</th><th>Product:</th><th>Size:</th><th>Extras:</th><th>Note:</th><th colspan="2">Order time:</th></tr>';

                            //Loop through all the results
                            while ($row = mysqli_fetch_assoc($result)) {

                                $order_id = $row['order_id'];
                                $order_customer_name = $row['order_customer_name'];
                                $product_name = $row['order_product'];
                                $product_size = $row['order_size'];
                                $order_note = $row['order_note'];
                                $extra1 = $row['e1_extracheese'];
                                $extra2 = $row['e2_garlic'];
                                $extra3 = $row['e3_oregano'];
                                $order_date = $row['order_date'];
                                $order_time = $row['order_time'];
        
                                //Check if extras have been chosen
                                if ($extra1 == 1) {
                                    $extra1 = 'extra cheese<br>';
                                } else {
                                    $extra1 = '';
                                }
        
                                if ($extra2 == 1) {
                                    $extra2 = 'garlic<br>';
                                } else {
                                    $extra2 = '';
                                }
        
                                if ($extra3 == 1) {
                                    $extra3 = 'oregano<br> ';
                                } else {
                                    $extra3 = '';
                                }

                                //Print the order number and date to the table
                                echo '<tr class="topborder"><td>',$order_id,'</td><td>',$order_customer_name,'</td><td>',$product_name,'</td><td>',$product_size,'</td><td>',$extra1,$extra2,$extra3,'</td><td>',$order_note,'</td><td>',$order_date,'</td><td>',$order_time,'</td></tr>';

                            }

                            echo '</table>';

                        } else {
                            echo 'No orders.';
                        }
                    ?>

                </table>
            </p>
        </div>
	</body>
</html>