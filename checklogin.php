<?php
    if (isset($_POST['submitbtn'])) {  
        
        $user = $_POST['txtuser'];
        $pass = $_POST['txtpass'];

        if (strcmp($user, "sarin") == 0 && strcasecmp($pass, "admin") == 0) {
            echo "<h2>Successfully login</h2>";
        } else {
            echo "<h2>Login Failed</h2>";
        }
    }
    ?>
