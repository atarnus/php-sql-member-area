<?php
    require_once('php/auth.php');
    require_once('php/connect.php');
    $title = 'Make an Order';
    require_once('php/head.php');
    include_once('php/navbar.php');

    //Define variable for member id
    $memberid = $_SESSION['SESS_MEMBER_ID'];

    //Fetch member details for current id
    $sql = "SELECT * FROM pr_members WHERE member_id=$memberid";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        $row = mysqli_fetch_assoc($result);
        $firstname=$row['firstname'];
        $lastname=$row['lastname'];
        $login=$row['login'];
    }
?>

    <body>
        <div class="wide">
            <h1>Update Your Details</h1>
            <form action="php/profile-exe.php" method="post">
                                    
                <div class="row">
                    <div class="col-20">
                            <label for="firstname">Etunimi:</label>
                    </div>
                    <div class="col-80">
                        <input type="text" name="firstname" id="firstname" value="<?php echo $firstname?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                            <label for="lastname">Etunimi:</label>
                    </div>
                    <div class="col-80">
                        <input type="text" name="lastname" id="lastname" value="<?php echo $lastname?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">
                            <label for="login">E-mail / Login:</label>
                    </div>
                    <div class="col-80">
                        <input type="email" name="login" id="login" value="<?php echo $login?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">&nbsp;
                    </div>
                    <div class="col-80">
                        <p><button type="submit" name="update">Update</button></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-20">&nbsp;</div>
                    <div class="col-80"><?php include('php/error.php'); ?></div>
                </div>
            </form>
        </div>
    </body>
</html>