<?php 
    session_start();
    $title = 'Login';
    require_once('php/head.php');
    include_once('php/navbar.php');
?>
    <body>

        <div class="wide">
            <form id="loginForm" name="loginForm" method="post" action="php/login-exe.php">

                <h1>Sign in</h1>

                <div class="row">
                    <div class="col-20">
                        <label for="login">E-mail / Login:</label>
                    </div>
                    <div class="col-80">
                        <input name="login" type="text" class="textfield" id="login" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                        <label for="password">Password:</label>
                    </div>
                    <div class="col-80">
                        <input name="password" type="password" class="textfield" id="password" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">&nbsp;</div>
                    <div class="col-80">
                        <input type="submit" name="Submit" value="Login" />
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-20">&nbsp;</div>
                <div class="col-80"><?php include('php/error.php'); ?></div>
            </div>

            <h3>Not a member yet?</h3>
            <p><a href="register.php">Click here to create an account</a></p>

            <!-- <p>Forgot password? <a href="pword.php">Click here.</a></p> -->
        </div>
    </body>
</html>
