<?php

include 'database.inc.php';

// Define variables and set to empty values
$usernameErr = $passwordErr = $fullnameErr = $emailErr = "";
$username = $password = $fullname = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check username
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    // Check password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }

    // Check full name
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full name is required";
    } else {
        $fullname = test_input($_POST["fullname"]);
    }


    // Check email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }



    // If all inputs are valid, insert data into the database
    if (empty($usernameErr) && empty($passwordErr) && empty($fullnameErr) && empty($emailErr)) {

        $obj= new Database();

        // Hash the password using bcrypt
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        
        $query = 'INSERT INTO users (username, fullname, password, email) VALUES (?, ?, ?, ?)';
        $stmt = $obj->getPdo()->prepare($query)->execute([$username, $fullname, $hashedPassword, $email]); // Use the hashed password
        header('Location: ../index.php');
        die();
    }
} else {
    header('Location: ../index.php');
}


// Function to validate input
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

