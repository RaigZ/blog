<?php
    session_start(); 
    require_once("../includes/config.php");

    $userTable = "users";
    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password']; 

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