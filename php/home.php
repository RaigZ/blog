<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        session_start();
        include("../includes/postlayout.php");
        require_once("../includes/config.php"); 

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
    <title>bloggoli</title>
    <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
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
        <!--Post creation Menu-->
        <?php include '../includes/postbox.php' ?> 
        <?php 
        if(!isset($_SESSION['idusers'], $_SESSION['username']))
            header("Location: login.php"); 

        $getPosts = "SELECT idusers, username, idpost, title, content, date 
                     FROM users, posts 
                     WHERE idusers = userid
                     ORDER BY date DESC";

        $postResults = $pdo->query($getPosts);
        
        while($row = $postResults->fetch()) {  
            if($_SESSION['idusers'] == $row['idusers']){
                $post = new Post($row['username'], $row['title'], $row['content'], $row['idpost'], false, true); 
                $post->print();
            } else {
                $post = new Post($row['username'], $row['title'], $row['content'], $row['idpost'], false, false); 
                $post->print();
            }  
        }

        $pdo = null;
        ?> 
    </div> 
    <!-- FOOTER -->
    <?php include '../includes/footer.php'?>
    <script src="../js/textarea.js"></script>
</body>
</html>

