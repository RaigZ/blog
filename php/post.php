<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        session_start();
        include("../includes/postlayout.php"); 
        include("../includes/commentlayout.php");

        $idpost = null;
        if(isset($_GET["idpost"])){
            $idpost = $_GET["idpost"];
        } 

        //$post = new Post();
        //$comment = new Comment();
        $tablePosts = "posts";
        $tableComments = "comments";
        $tableUsers = "users";
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
            if(isset($idpost)){  
                $getPost = "SELECT username, title, content, idpost 
                            FROM $tableUsers, $tablePosts
                            WHERE idpost='$idpost' 
                            AND idusers='$idpost' ";  
                $postResults = $pdo->query($getPost);

                if($row = $postResults->fetch()){
                    $post = new Post($row['username'], $row['title'], $row['content'], $row['idpost'], true); 
                    $post->print();
                } 

                $getComments = "SELECT username, idcomment, content 
                                FROM comments, users 
                                WHERE postid= '$idpost' 
                                AND idusers=userid"; 
                $commentsResults = $pdo->query($getComments);

                while($row = $commentsResults->fetch()){
                    $comment = new Comment($row['username'], $row['idcomment'], $row['content']); 
                    $comment->print();
                } 
                $pdo = null;
            }
        ?> 
    </div>  
    <?php include '../includes/footer.php'?>
</body>
</html>

