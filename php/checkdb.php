<?php  
    require_once("../includes/config.php");  
    $where = $_POST["where"];
    if($where == "login" && isset($_POST['username'], $_POST['email'], $_POST['password'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userTable = "users";

        $sql = "SELECT COUNT(*) FROM $userTable 
                WHERE username = :username 
                AND email = :email 
                AND password = :pass";
    
        //Prepared statement
        $result = $pdo->prepare($sql);
        $result->execute(array(":username" => $username, ":email" => $email, ":pass" => $password));

        $count = $result->fetchColumn(); 
        $pdo = null;

        echo ($count > 0) ? json_encode(array("exists" => true, "where" => $where)) : json_encode(array("exists" => false, "where" => $where)); 
    } else if($where == "signup" && isset($_POST['email'])){
        $email = $_POST["email"]; 

        $userTable = "users";
        $sql = "SELECT COUNT(*) 
                FROM $userTable
                WHERE email = :email";

        //Prepared statement
        $result = $pdo->prepare($sql);
        $result->execute(array(":email" => $email));

        $count = $result->fetchColumn();
        $pdo = null;

        echo ($count > 0) ? json_encode(array("exists" => true, "where" => $where)) : json_encode(array("exists" => false, "where" => $where)); 
    } 
?>