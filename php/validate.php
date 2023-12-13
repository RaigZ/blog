<?php 
    session_start();
    require_once("../includes/config.php");
    
    $username = $_GET['username'];
    $email = $_GET['email'];
    $password  = $_GET['password']; 

    try {
        $userTable = "users";

        $sql = "SELECT * FROM $userTable 
                WHERE username = :username 
                AND email = :email 
                AND password = :pass";
    
        //Prepared statement
        $result = $pdo->prepare($sql);
        $result->execute(array(":username" => $username, ":email" => $email, ":pass" => $password));

        if(!$row = $result->fetch())
            header("Location: login.php"); 
            //exit("You must enter a valid email address and password. Click your browser's Back button to return to the previous page.</p>");
        
        $_SESSION['idusers'] = $row['idusers'];
        $_SESSION['username'] = $row['username'];

        $pdo = null;

        header('Location: home.php');
    } catch(Exception $error){
        header('Location: login.php');
    }
?>