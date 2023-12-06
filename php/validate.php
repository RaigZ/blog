<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Validate</title>
</head>
<body>
<?php 
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
        header("Location: login.php"); 
        //exit("You must enter a valid email address and password. Click your browser's Back button to return to the previous page.</p>");
    
    $_SESSION['idusers'] = $row['idusers'];
    $_SESSION['username'] = $row['username'];

    $pdo = null;
?>
    <h2> Login Successful</h2>
    <!--send the user ID to home.php-->
<p><a href="home.php">Home Portal</a></p>
</body>
</html>