<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db_name = "db_ecommerce";

    $conn = mysqli_connect($server, $user, $password, $db_name);

    if(!$conn) {
        die("Error MySQL connect: " . mysqli_connect_error() . " - " . mysqli_connect_errno());
    } else {
        // echo("success");
    }
?>