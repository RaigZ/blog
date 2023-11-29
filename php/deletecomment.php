<?php 
    session_start();
    require_once("../includes/config.php");
    $commentTable = "comments";

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])){
        try {
            $commentId = $_POST['id']; 
            $deleteComment = "DELETE FROM $commentTable 
                              WHERE idcomment='$commentId'";
            $pdo->exec($deleteComment);
            header('Location: post.php?idpost=' . $_SESSION['currPostId']);
        } catch (Exception $error){
            header('Location: post.php?idpost=' . $_SESSION['currPostId']);
        }
    }  
?>