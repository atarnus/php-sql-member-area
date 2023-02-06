<div class="navbar">
    <div class="wide">
        <div class="row">
            <div class="col-60">
                <ul>
                    <?php
                        if(isset($_SESSION['SESS_MEMBER_ID'])) {

                            // Define each name associated with an URL
                            $urls = array(
                                'Home' => 'index.php',
                                'Make an Order' => 'order.php',
                                'Order History' => 'order-history.php',
                                'Logout' => 'logout.php'
                            );
                            
                            // Echo the list and set active class to link corresponding to current page title
                            foreach ($urls as $name => $url) {
                                print '<li '.(($title === $name) ? ' class="active" ': '').
                                '><a href="'.$url.'">'.$name.'</a></li>';
                            }
                        } else {
                            echo '<li><a href="login.php">Login</a></li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="col-40">
            <?php if(isset($_SESSION['SESS_MEMBER_ID'])) {
                echo '<h4 class="right">Welcome, ',$_SESSION['SESS_FIRST_NAME'],'</h4></div>';
                } ?>
            </div>
        </div>
    </div>
</div>
