<?php
	session_start();
    $title = 'Register';
    require_once('php/head.php');
    include_once('php/navbar.php');
?>

    <body>

        <div class="wide">

            <form id="loginForm" name="loginForm" method="post" action="php/register-exe.php">
                
                <h1>Register</h1>

                <div class="row">
                    <div class="col-20">
                        <label for="fname">First name:</label>
                    </div>
                    <div class="col-80">
                        <input name="fname" type="text" class="textfield" id="fname" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                        <label for="lname">Last name:</label>
                    </div>
                    <div class="col-80">
                        <input name="lname" type="text" class="textfield" id="lname" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                        <label for="login">E-mail/Login:</label>
                    </div>
                    <div class="col-80">
                        <input name="login" type="text" class="textfield" id="login" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                        <label for="login">Password:</label>
                    </div>
                    <div class="col-80">
                        <input name="password" type="password" class="textfield" id="password" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                        <label for="login">Confirm Password:</label>
                    </div>
                    <div class="col-80">
                        <input name="cpassword" type="password" class="textfield" id="cpassword" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">&nbsp;</div>
                    <div class="col-80 left"><input type="submit" name="Submit" value="Register" /></div>
                </div> 
            </form>

            <div class="row">
                <div class="col-20">&nbsp;</div>
                <div class="col-80"><?php include('php/error.php'); ?></div>
            </div>

        <h3>Already a member?</h3>
        <p><a href="login.php">Click here to sign in</a></p>

    </body>
</html>
