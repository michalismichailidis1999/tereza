<?php
    session_start();

    if(isset($_SESSION["loggedin"])){
        header("Location: ./");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Η Τερέζα Μιχαηλίδου είναι μέλος του Δικηγορικού Συλλόγου Βέροιας. 
    Ασκεί μάχιμη δικηγορία και αναλαμβάνει το χειρισμό υποθέσεων με γνώμονα την προάσπιση 
    των συμφερόντων των πελατών. Παρέχει νομικές υπηρεσίες και συμβουλές, δικαστική και 
    εξωδικαστική επίλυση των διαφορών με επαγγελματισμό, εχεμύθεια και υπευθυνότητα.">
    <meta name="keywords" content="τερεζα μιχαηλιδου, δικηγορος βεροια">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" 
    integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" 
    crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Τερέζα Σ. Μιχαηλίδου - Δικηγόρος</title>
</head>
<body>

    <div class="form-container">
        <?php
            if(isset($_SESSION["login_error"])){
                $error = $_SESSION["login_error"];
                echo "
                    <div class='error-message'>
                        <p>$error</p>
                    </div>
                ";
            }
        ?>

        <form action="../actions/admin_login.php" method="POST">
            <h1>ΣΥΝΔΕΣΗ ΔΙΑΧΕΙΡΗΣΤΗ <i class="fas fa-user-shield"></i></h1>

            <div class="form-groups-container">
                <div class="form-group">
                    <span><i class="fas fa-envelope"></i></span><input type="email" name="email" placeholder="Εισάγεται το email σας..." required>
                </div>

                <div class="form-group">
                    <span><i class="fas fa-key"></i></span><input type="password" name="password" placeholder="Εισάγεται τον κωδικό σας..." required>
                </div>

                <button class="btn" type="submit" name="submit">Σύνδεση</button>
            </div>
        </form>
    </div>

<?php require_once("./includes/footer.php")?>