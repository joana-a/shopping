<?php
require("../classes/addcustomer.php");

session_start();
function sanitizeInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if the login form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $email = sanitizeInput($_POST['email']);
    $password = sanitizeInput($_POST['password']);

    $customer = new CustomerClass();

    if ($customer->login($email, $password)) {
        header("Location: ../view/home.php");
        exit();
    } else {
        
        $_SESSION['error'] = "Invalid email or password.";
        header("Location: ../login/login.php"); 
        exit();
    }
} else {
    header("Location: ../login/login.php");
    exit();
}
