<?php
    // import database.php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to Fakebook</h2>
        username:<br>
        <input type="text" name="username"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="register">
    </form>
</body>
</html>

<?php 
    // the form has been posted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // good practice to avoid sql injection / malicious script
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        // check if empty
        if(empty($username)) {
            echo"Please enter a username";
        }
        else if(empty($password)) {
            echo"Please enter a password";
        }
        else {
            // If username & password valid, then hash password
            $hash = password_hash($password, PASSWORD_DEFAULT);
            // sql query to insert new user in db
            $sql = "INSERT INTO user (username, password)
                     VALUES ('$username', '$hash')";

            try {
                // execute
                mysqli_query($conn, $sql);
                echo"You are now registered!";
            }
            catch(mysqli_sql_exception) {
                echo"That username is taken";
            }
        }
    }

    // close connection
    mysqli_close($conn);
?>