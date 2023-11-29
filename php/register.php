<?php 
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <?php
        if (empty($_GET['username'])||empty($_GET['email'])||empty($_GET['password']))
            exit ("<p> You must enter values in all fields ! Click your browser's Back button to return to the previous page.</p>");

        require_once("../includes/config.php");

        $users = "users";
        $username = $_GET['username'];
        $email = $_GET['email'];
        $password = $_GET['password'];

        $sql = "SELECT * FROM $users";
        $result = $pdo->query($sql);
        while($row = $result->fetch()) {
            if($row['email']==$email)
                exit("<p>The email address you entered is already registered! Click your browser's Back button to return to the previous page.</p>");
        }
        $sql = "INSERT INTO $users (username, email, password) VALUES ('$username', '$email','$password')";
        $pdo->exec($sql);

        $sql = "SELECT * FROM $users WHERE email = '$email'";
        $result= $pdo->query($sql);
        if($row = $result->fetch())
        $UserID = $row['idusers'];

        $pdo = null;

        $_SESSION['idusers'] = $row['idusers'];
        $_SESSION['username'] = $row['username'];
        
        header()
    ?>
    <!--<p>Your new user ID is <strong><?=$UserID?></strong></p>-->
    <!--<p><a href="home.php">Home Portal</a></p>-->

</body>
</html>