<?php
session_start(); 

require("../controllers/customercontroller.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"]) && !empty($_POST["email"]) && !empty($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $user = loginUser_ctr($email, $password);

        if ($user) {
            $_SESSION['user_id'] = $user['customer_id'];
            $_SESSION['user_email'] = $user['customer_email'];
            $_SESSION['user_name'] = $user['customer_name'];

            
            header("Location: ../view/home.php");
            exit();
        } else {
            header("Location: ../view/login.php?error=invalid_credentials");
            exit();
        }
    } else {
        header("Location: ../view/login.php?error=missing_fields");
        exit();
    }
} else {
    header("Location: ../view/login.php");
    exit();
}
