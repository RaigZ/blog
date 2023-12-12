<?php 
    session_start();
    require_once("../includes/config.php");
    $postTable = "posts";

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_SESSION['idusers'], $_POST['title'], $_POST['content'])){ 
        $userId = $_SESSION['idusers']; 
        $title = $_POST['title'];
        $content = $_POST['content'];
        $cDate = date("Y-m-d");
        try {
            $createPost = "INSERT INTO $postTable (title, content, date, userid) 
                            VALUES (:title, :content, :cDate, :userid)";

            //Prepared statement
            $result = $pdo->prepare($createPost);
            $result->execute(array(":title" => $title, ":content" => $content, ":cDate" => $cDate, ":userid" => $userId));
            header('Location: home.php');
        } catch(Exception $error){
            header('Location: home.php');
        }
    }  
?>