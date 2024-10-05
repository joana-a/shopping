<?php
// Start session
session_start(); 

// For header redirection
ob_start();

// Function to check for login
function check_login() {
    // Check if user is logged in
    if(!isset($_SESSION['user_id'])) {
        // Redirect to login page if not logged in
        header("Location: login.php");
        exit();
    }
}

// Function to get user ID
function get_user_id() {
    // Check if user is logged in
    if(isset($_SESSION['user_id'])) {
        return $_SESSION['user_id'];
    } else { 
        return null;
    }
}

// Function to set user ID
function set_user_id($user_id) {
    $_SESSION['user_id'] = $user_id;
}

// Function to get user email
function get_user_email() {
    // Check if user is logged in
    if(isset($_SESSION['user_email'])) {
        return $_SESSION['user_email'];
    } else {
        return null;
    }
}

// Function to set user email
function set_user_email($user_email) {
    $_SESSION['user_email'] = $user_email;
}





























// <?php
// session_start();

// ob_start();

// function isLoggedIn() {
//     return isset($_SESSION['id']);
// }
// function getUserID() {
//     if (isLoggedIn()) {
//         return $_SESSION['customer_id'];
//     }
//     return null;
// }
// function getUserRole() {
//     if (isLoggedIn()) {
//         return $_SESSION['user_role'];  
//     }
//     return null;
// }

// function isAdmin() {
//     return getUserRole() === '1';  
// }

// function isCustomer() {
//     return getUserRole() === '2';  
// }