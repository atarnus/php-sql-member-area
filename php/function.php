<?php

    //Cleaning function for user inserts
	function clean($conn, $str) {
        $str = trim($str);
        $str = stripslashes($str);
        $str = htmlspecialchars($str);
        $str = mysqli_real_escape_string($conn, $str);
        return $str;
    }

    //Function to check if checkboxes are checked
    function checkbox($str) {
        if(isset($_POST[$str])) {
            $str = 1;
            return $str;
        } else {
            $str = 0;
            return $str;
        }
    }

?>