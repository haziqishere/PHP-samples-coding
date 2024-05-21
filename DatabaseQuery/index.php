<?php 
    include("database.php");

    //***Display specific user***//
    $sql = "SELECT * FROM user WHERE username = 'Spongebob'";
    $result = mysqli_query($conn, $sql);

    // if atleast 1 matching result
    if(mysqli_num_rows($result) > 0){
        // mysqli_fetch_assoc return next available row. Row is an array
        $row = mysqli_fetch_assoc($result);
        echo $row["id"] . "<br>";
        echo $row["username"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
    else {
        echo"No user found";
    }

    //***Display All User***//
    echo"<br> All User <br>";

    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);
    // if atleast 1 matching result
    if(mysqli_num_rows($result) > 0){
        // mysqli_fetch_assoc return next available row. Row is an array
        // while there are row
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["username"] . "<br>";
            echo $row["reg_date"] . "<br>";
        }
    }
    else {
        echo"No user found";
    }

    // close connection
    mysqli_close($conn);
?>