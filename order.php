<?php
	require_once('php/auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Tilaus</title>
		<link href="css/css.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
        <div class="wide">
            <h1>Welcome <?php echo $_SESSION['SESS_FIRST_NAME'];?></h1>
            <p class="nav"><a href="member-index.php">Profile</a> | <a href="member-orders.php">Order history</a> | <a href="logout.php">Logout</a></p>
            <h2>Make an order</h2>
            <form id="orderForm" name="orderForm" method="post" action="php/order-exec.php">
                <?php
                    if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                        echo '<ul class="err">';
                        foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                            echo '<li>',$msg,'</li>'; 
                        }
                        echo '</ul>';
                        unset($_SESSION['ERRMSG_ARR']);
                    }
                ?>
                <p>
                    <label for="name">Customer name:</label> 
                    <input name="name" type="text" id="name" value="<?php echo $_SESSION['SESS_FIRST_NAME']," ",$_SESSION['SESS_LAST_NAME'];?>"></input><br>
                </p> 
                <p>
                    <label for="pizza">Choose your pizza:</label>
                    <select name="pizza" id="pizza">
                        <option value="Tropicana">Tropicana</option>
                        <option value="Margherita">Margherita</option>
                        <option value="Veggies Vegan">Veggies Vegan</option>
                    </select><br>
                </p>   
                <p>
                    <label for="size">Pizza size:</label><br>
                    <input type="radio" id="small" name="size" value="small">
                    <label for="small">Small</label><br>
                    <input type="radio" id="medium" name="size" value="medium">
                    <label for="medium">Medium</label><br>
                    <input type="radio" id="large" name="size" value="large">
                    <label for="large">Large</label><br>
                </p>
                <p>
                    <label for="extras">Extras:</label><br>
                    <input type="checkbox" id="extracheese" name="extracheese" value="extracheese">
                    <label for="extracheese">Extra cheese</label><br>
                    <input type="checkbox" id="garlic" name="garlic" value="garlic">
                    <label for="garlic">Garlic</label><br>
                    <input type="checkbox" id="oregano" name="oregano" value="oregano">
                    <label for="oregano">Oregano</label>
                </p>
                <p>
                    <label for="note">Note for order:</label><br>
                    <textarea name="note" id="note" rows="5" cols="25"></textarea>
                </p>
                <p>
                    <input type="submit" name="submit" value="Order">
                </p>
            </form>
        </div>
	</body>
</html>
