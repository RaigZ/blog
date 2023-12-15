<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        session_start();
        //include("../includes/postlayout.php");
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
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/about_us.css" rel="stylesheet" type="text/css" >

    <link href="../css/bg.css" rel="stylesheet" type="text/css">
    <link href="../css/top-nav.css" rel="stylesheet" type="text/css">
    <script src="../js/handler.js"></script>

</head>
<body>
    <!-- NAVBAR -->
    <?php include '../includes/header.php'?>  
    <!-- BODY SEGMENT -->
    <div class="boxbody container d-flex flex-column justify-content-center align-items-center gap-2">
        <h1>About Us</h1>
    </div>

    <div id="title_info">
        <h3>Creators of Blog Information</h3>
        Group of CSUSM students. A Web Development project. (Add more info here)
        <br>
    </div>
    <fieldset>
        <legend>1st person: Name</legend>
        <p> info on person</p>    
    </fieldset>
    <fieldset>
        <legend>2nd person: name</legend>
        <p> info on person</p>    
    </fieldset>
    <fieldset>
        <legend>3nd person: Name</legend>
        <p> info on person</p>    
    </fieldset>
    <fieldset>
        <legend>4nd person: name</legend>
        <p> info on person</p>    
    </fieldset>
    
    <!-- FOOTER -->
    <?php include '../includes/footer.php'?>
    <script src="../js/textarea.js"></script>
</body>
</html>
