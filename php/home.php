<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        session_start();
        include("../includes/postlayout.php");

        $userid=null;
        $username=null;
        if(isset($_GET["idusers"])) {
            $userid = $_GET["idusers"];
        }
        
        if(isset($_GET["idusers"])) {
            $username = $_GET["username"];
        }
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="../css/home.css" rel="stylesheet" type="text/css">
    <link href="../css/bg.css" rel="stylesheet" type="text/css">
    <link href="../css/top-nav.css" rel="stylesheet" type="text/css">
    <script src="../js/handler.js"></script>
</head>
<body>
    <!-- NAVBAR -->
    <?php include '../includes/header.php'?> 
    <!-- BODY SEGMENT -->
    <div class="boxbody container d-flex flex-column justify-content-center align-items-center gap-2">
        <?php 
            require_once("../includes/config.php"); 
            $getPosts = "SELECT username, idpost, title, content FROM users, posts WHERE idusers = userid";
            $postResults = $pdo->query($getPosts);
            while($row = $postResults->fetch()) {  
                $post = new Post($row['username'], $row['title'], $row['content'], $row['idpost'], false); 
                $post->print();
            }

            $pdo = null;
        ?> 
    </div>
    
    <!--<?php 
        if(isset($_SESSION['idusers'], $_SESSION['username']) && !empty($_SESSION['idusers']) && !empty($_SESSION['username'])){
            $logMessage = '<p style="text-align: center; font-size: 54px"><strong>ID: </strong>' . $_SESSION['idusers'] . '</p>';
        } else {
            $logMessage = '<p style="text-align: center; font-size: 54px"><strong>Not logged in</strong></p>';
        } 
        echo $logMessage;
    ?>-->
    <!-- FOOTER -->
    <?php include '../includes/footer.php'?>
</body>
</html>

