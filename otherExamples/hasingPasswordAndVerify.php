<?php
    /* hashing = transforming sensitive data (password)
                 into letters, numbers, and/or symbols via
                 mathematical process.
    */

    $password = "pizza123";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    // PASSWORD_DEFAULT : use bcrypth algorithm (default for PHP 5.5.0)

    // Verify password
    if(password_verify("pizza123", $hash)) {
        echo"You are logged in!";
    }
    else {
        echo"Incorrect password";
    }
?>