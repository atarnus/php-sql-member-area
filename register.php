<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login Form</title>
        <link href="css/css.css" rel="stylesheet">
    </head>
    <body>

        <div class="med">

            <form id="loginForm" name="loginForm" method="post" action="php/register-exec.php">
                
                <h1 class="center">Register</h1>

                <div class="row">
                    <div class="col-50">
                        <label class="right" for="fname">First name:</label>
                    </div>
                    <div class="col-50">
                        <input name="fname" type="text" class="textfield" id="fname" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-50">
                        <label class="right" for="lname">Last name:</label>
                    </div>
                    <div class="col-50">
                        <input name="lname" type="text" class="textfield" id="lname" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-50">
                        <label class="right" for="login">E-mail/Login:</label>
                    </div>
                    <div class="col-50">
                        <input name="login" type="text" class="textfield" id="login" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-50">
                        <label class="right" for="login">Password:</label>
                    </div>
                    <div class="col-50">
                        <input name="password" type="password" class="textfield" id="password" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-50">
                        <label class="right" for="login">Confirm Password:</label>
                    </div>
                    <div class="col-50">
                        <input name="cpassword" type="password" class="textfield" id="cpassword" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-50">&nbsp;</div>
                    <div class="col-50 left"><input type="submit" name="Submit" value="Register" /></div>
                </div> 
            </form>

            <div class="row">
                <div class="col-50">&nbsp;</div>
                <div class="col-50"><?php include('php/error.php'); ?></div>
            </div>

        <h3 class="center">Already a member?</h3>
        <p class="center"><a href="login.php">Click here to sign in</a></p>

    </body>
</html>
