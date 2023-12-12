<?php 
    session_start();
    require_once("../includes/config.php");
    $commentTable = "comments";

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['currPostId'], $_SESSION['idusers'], $_POST['comment'])){ 
        $userId = $_SESSION['idusers'];
        $postId = $_SESSION['currPostId'];
        $content = $_POST['comment'];
        try {
            $postComment = "INSERT INTO $commentTable (content, userid, postid) 
                            VALUES (:content, :userid, :postid)";
            
            //Prepared statement
            $result = $pdo->prepare($postComment);
            $result->execute(array(":content" => $content, ":userid" => $userId, ":postid" => $postId)); 

            header('Location: post.php?idpost=' . $_SESSION['currPostId']);
        } catch(Exception $error){
            header('Location: post.php?idpost=' . $_SESSION['currPostId']);
        }
    } 
    //$postComment = "INSERT INTO comments (`content`, `userid`, `postid`) 
    //                VALUES ('Agreed', '4', '4')";

    //header('Location: post.php?idpost=' . $_SESSION['currPostId']);
?>