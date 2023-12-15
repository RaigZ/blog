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

        $user_input=null;
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="../css/contact_page.css" rel="stylesheet" type="text/css" >

    <link href="../css/bg.css" rel="stylesheet" type="text/css">
    <link href="../css/top-nav.css" rel="stylesheet" type="text/css">
    <script src="../js/handler.js"></script>

</head>
<body>
    <!-- NAVBAR -->
    <?php include '../includes/header.php'?> 
    <!-- BODY SEGMENT -->
    <div>
        <div class="boxbody container d-flex flex-column justify-content-center align-items-center gap-2">
            <h1>Blog Contact</h1>
        </div>
        <div class="info_details">
            <label id="contact_info"> <b>Contact Information</b></label> <br>
            <ul>
                <li>Email address: <a href ="gamil">bloggoli@gmail.com</a></li>
                <li>Business Phone number: <a href="call: 000-000-0000"> 000-000-0000</a></li>    
                <li>Mailing Address: <a href="address">In some garage Dr, CA</a></li>
            </ul>
        </div>
    
        <form action="form.php" method="POST" class="Contact_form">
            <Label class="entries">Please share your Concern, questions, and or thoughts:</Label>
            <br>
            <textarea name="thoughts" cols="50" rows="5" ></textarea>

            <br>
            <input type="submit" value="Submit" />
            <input type="reset" value="Clear" />
        </form>
    </br>
    
    </div>
    <!-- FOOTER -->
    <?php include '../includes/footer.php'?>
    <script src="../js/textarea.js"></script>
</body>
</html>