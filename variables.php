<?php
 // var
    // string
    $name = "Bro Code";
    $food = "pizza";
    $email = "fake123@gmail.com";

    // whole number
    $age = 21;
    $users = 2;
    $quantity = 3;

    // decimal number
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    // boolean
    $employed = true;
    $online = false;
    $for_sale = true;

    /*
    echo"Hello {$name}<br>";
    echo"You like {$food}<br>";
    echo"Your email is {$email}<br>";

    echo"You are {$age} years old<br>";
    echo"There are {$users} users online<br>";
    echo"You would like to buy {$quantity} items <br>";
    
    echo"Your gpa is: {$gpa}<br>";
    echo"Your pizza is \${$price}<br>";
    echo"The sales tax rate is: {$tax_rate}%<br>";
    */

    $total = null;

    echo"You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo"Your total is: \${$total}";
?>