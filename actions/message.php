<?php
    require_once("../config/db.php");

    session_start();

    if(isset($_POST["submit"])){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        $query = "INSERT INTO messages(first_name, last_name, phone, email, message) 
                    VALUES('$first_name', '$last_name', '$phone', '$email', '$message')";

        $message_send = mysqli_query($connection, $query);

        if($message_send){
            $_SESSION['success'] = true;
            $_SESSION['response-message'] = "Το μήνυμα στάλθηκε επιτυχώς!";
        }else{
            $_SESSION['error'] = true;
            $_SESSION['response-message'] = "Κάτι πήγε στραβά και το μήνυμα δεν στάλθηκε!";
        }
    }else{
        $_SESSION['error'] = true;
        $_SESSION['response-message'] = "Παρακαλώ συμπληρώστε όλα τα πεδία!";
    }

    header("Location: ../contact.php");
?>