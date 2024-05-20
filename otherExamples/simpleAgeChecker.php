<?php
    $age = 101;

    if ($age >=100) {
        echo "You are too old to enter this site";
    }
    else if ($age <= 0) {
        echo "That wasn't a valid age";
    }
    else if ($age >=18) {
        echo "You may enter this site";
    } 
    else {
        echo "You must be 18+ to enter";
    }
?>