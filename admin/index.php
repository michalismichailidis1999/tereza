<?php
    session_start();
    
    if(!isset($_SESSION["loggedin"])){
        header("Location: login.php");
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

<div class="dashboard-container">
    <nav class="sidenav">
        <ul>
            <li>Μυνήματα <i class="fas fa-inbox"></i></li>
            <li>Ραντεβού <i class="far fa-calendar-alt"></i></li>
            <li>Αποσύνδεση <i class="fas fa-power-off"></i></li>
        </ul>
    </nav>

    <div class="dashboard">
        <a href="../" class="go-back"><i class="fas fa-arrow-left"></i> Γύρισε πίσω στην αρχική σελίδα</a>
    </div>
</div>

<?php require_once("./includes/footer.php")?>