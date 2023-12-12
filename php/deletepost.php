<?php 
    session_start();
    require_once("../includes/config.php");
    $postTable = "posts";

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])){
        try {
            $postId = $_POST['id']; 
            $deletePost = "DELETE FROM $postTable 
                           WHERE idpost=:postid"; 

            //Prepared statement
            $result = $pdo->prepare($deletePost);
            $result->execute(array(":postid" => $postId));

            header('Location: home.php');
        } catch (Exception $error){
            header('Location: home.php');
        }
    }  
?>