<?php
    require_once("constants.php");

    $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);

    if(!$connection){
        echo "Cannot connect to database. Something went wrong";
    }
?>