<?php
    session_start();

    if (empty($_GET['username'])||empty($_GET['email'])||empty($_GET['password']))
        exit ("<p> You must enter values in all fields ! Click your browser's Back button to return to the previous page.</p>");

    require_once("../includes/config.php");

    $userTable = "users";
    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = "SELECT * FROM $userTable";
    $result = $pdo->query($sql);
    while($row = $result->fetch()) {
        if($row['email']==$email)
            exit("<p>The email address you entered is already registered! Click your browser's Back button to return to the previous page.</p>");
    } 

    $sql = "INSERT INTO $userTable (username, email, password) 
            VALUES (:username, :email, :pass)";
    
    //Prepared statement
    $result = $pdo->prepare($sql);
    $result->execute(array(":username" => $username, ":email" => $email, ":pass" => $password));

    $sql = "SELECT * FROM $userTable 
            WHERE email = :email";
    
    //Prepared statement
    $result = $pdo->prepare($sql);
    $result->execute(array(":email" => $email)); 

    if($row = $result->fetch())
    $UserID = $row['idusers'];

    $pdo = null;

    $_SESSION['idusers'] = $row['idusers'];
    $_SESSION['username'] = $row['username'];
    
    header('Location: login.php')
?>