<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (validateUser($email, $password, $conn)) {
        // Redirect to the home page upon successful login
        header("Location: ../blog.php");
        exit();
    } else {
        echo "Invalid login credentials";
    }
}