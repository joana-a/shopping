<?php
session_start();

ob_start();

function isLoggedIn() {
    return isset($_SESSION['id']);
}
function getUserID() {
    if (isLoggedIn()) {
        return $_SESSION['customer_id'];
    }
    return null;
}
function getUserRole() {
    if (isLoggedIn()) {
        return $_SESSION['user_role'];  
    }
    return null;
}

function isAdmin() {
    return getUserRole() === '1';  
}

function isCustomer() {
    return getUserRole() === '2';  
}

