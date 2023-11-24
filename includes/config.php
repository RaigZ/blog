<?php
    $connString = "mysql:host=localhost:8889; dbname=blogdb";
    $user="root";
    $pass="root";

    $pdo=new pdo($connString,$user,$pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//useful during initial development and debugging
?>
