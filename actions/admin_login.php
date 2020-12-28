<?php
    require_once("../config/db.php");

    session_start();

    if(isset($_POST["submit"])){
        if(isset($_POST["email"]) && isset($_POST["password"])){
            $email = $_POST["email"];
            $password = $_POST["password"];

            $query = "SELECT * FROM admins WHERE email='$email'";

            $result = mysqli_query($connection, $query);
            $rows = mysqli_num_rows($result);

            if($rows > 0){
                session_unset();
                $_SESSION["loggedin"] = true;
                header("Location: ../admin/index.php");
            }else{
                $_SESSION["login_error"] = "Το email ή ο κωδικός είναι λάθος.";
                header("Location: ../admin/login.php");
            } 
        }else{
            $_SESSION["login_error"] = "Παρακαλώ εισάγεται όλα τα πεδία.";
            header("Location: ../admin/login.php");
        }
    }else{
        $_SESSION["login_error"] = "Παρακαλώ εισάγεται όλα τα πεδία.";
        header("Location: ../admin/login.php");
    }
?>