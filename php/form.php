<?php 
    session_start();
    require_once("../includes/config.php");
    $contact_form = "contact_form";

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['thoughts'])){
        try {
            $userid = $_SESSION['idusers'];
            $user_input = $_POST['thoughts']; 
            //echo $user_input . $userid;
            $save_input = "INSERT INTO $contact_form  (userid, context)
                              VALUES (:userid, :userinput)";

            //Prepared statement
            $result = $pdo->prepare($save_input);
            $result->execute(array(":userid" => $userid, ":userinput" => $user_input));

            header('location: contact.php');
        } catch (Exception $error){
            header('location: contact.php');
        }
    }
?>      