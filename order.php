<?php
	require_once('php/auth.php');
    $title = 'Make an Order';
    require_once('php/head.php');
    include_once('php/navbar.php');
?>
	<body>
        <div class="wide">
            <h1>Make an Order</h1>
            <form id="orderForm" name="orderForm" method="post" action="php/order-exe.php">
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

                <div class="row">
                    <div class="col-20">
                        <label for="name">Customer name:</label> 
                    </div>
                    <div class="col-80">
                        <input name="name" type="text" id="name" value="<?php echo $_SESSION['SESS_FIRST_NAME']," ",$_SESSION['SESS_LAST_NAME'];?>"></input>
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                        <label for="pizza">Choose your pizza:</label>
                    </div>
                    <div class="col-80">
                    <select name="pizza" id="pizza">
                        <option value="Tropicana">Tropicana</option>
                        <option value="Margherita">Margherita</option>
                        <option value="Veggies Vegan">Veggies Vegan</option>
                    </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-20 inline">
                        <p><label for="size">Pizza size:</label></p>
                    </div>
                    <div class="col-80 inline">
                        <p><input type="radio" id="small" name="size" value="small">
                        <label for="small">Small</label><br>
                        <input type="radio" id="medium" name="size" value="medium">
                        <label for="medium">Medium</label><br>
                        <input type="radio" id="large" name="size" value="large">
                        <label for="large">Large</label><br></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-20 inline">
                        <p><label for="extras">Extras:</label></p>
                    </div>
                    <div class="col-80 inline">
                        <p>
                            <input type="checkbox" id="extracheese" name="extracheese" value="extracheese">
                            <label for="extracheese">Extra cheese</label><br>
                            <input type="checkbox" id="garlic" name="garlic" value="garlic">
                            <label for="garlic">Garlic</label><br>
                            <input type="checkbox" id="oregano" name="oregano" value="oregano">
                            <label for="oregano">Oregano</label>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                        <label for="note">Note for order:</label>
                    </div>
                    <div class="col-80">
                        <textarea name="note" id="note" rows="5" cols="25"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">&nbsp;</div>
                    <div class="col-80">
                        <input type="submit" name="submit" value="Order">
                    </div>
                </div>

            </form>
        </div>
	</body>
</html>
