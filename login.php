<?php 
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <link href="css/css.css" rel="stylesheet" type="text/css" />
    </head>
    <body>

        <div class="med">
            <form id="loginForm" name="loginForm" method="post" action="php/login-exec.php">

                <h1 class="center">Sign in</h1>

                <div class="row">
                    <div class="col-50">
                        <label class="right" for="login">E-mail / Login:</label>
                    </div>
                    <div class="col-50">
                        <input name="login" type="text" class="textfield" id="login" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-50">
                        <label class="right" for="password">Password:</label>
                    </div>
                    <div class="col-50">
                        <input name="password" type="password" class="textfield" id="password" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-50">&nbsp;</div>
                    <div class="col-50">
                        <input type="submit" name="Submit" value="Login" />
                    </div>
                </div>
            </form>

            <div class="row">
                <div class="col-50">&nbsp;</div>
                <div class="col-50"><?php include('php/error.php'); ?></div>
            </div>

            <h3 class="center">Not a member yet?</h3>
            <p class="center"><a href="register.php">Click here to create an account</a></p>

            <!-- <p>Forgot password? <a href="pword.php">Click here.</a></p> -->
        </div>
    </body>
</html>
