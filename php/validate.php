<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validate</title>
</head>
<body>
<?php
    if (empty($_GET['username'])||empty($_GET['email'])||empty($_GET['password']))
        exit ("<p> You must enter values in all fields! Click your browser's Back button to return to the previous page.</p>");

    $username = $_GET['username'];
    $email = $_GET['email'];
    $password  = $_GET['password'];

    require_once("../includes/config.php");

    $users = "users";

    $sql = "SELECT * FROM $users 
            WHERE username = '$username' 
            AND email = '$email' 
            AND password = '$password'";
    $result = $pdo->query($sql);

    if(!$row = $result->fetch()) 
        exit("You must enter a valid email address and password. Click your browser's Back button to return to the previous page.</p>");
    else {
        $UserID = $row['idusers'];
    }

    $pdo = null;
?>
    <h2> Login Successful</h2>
    <!--send the user ID to home.php-->
<p><a href="home.php?idusers=<?=$UserID?>&username=<?=$username?>">Home Portal</a></p>
</body>
</html>