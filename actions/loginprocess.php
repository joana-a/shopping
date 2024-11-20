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
            $_SESSION['user_role'] = $user['user_role']; 

            if ($_SESSION['user_role'] == 2) {
                header("Location: ../view/home.php");
                exit();
            } else {
                header("Location: ../view/admindashboard.php");
                exit();
            }
        } else {
            header("Location: ../login/login.php?error=invalid_credentials");
            exit();
        }
    } else {
        header("Location: ../login/login.php?error=missing_fields");
        exit();
    }
} else {
    header("Location: ../login/login.php");
    exit();
}
