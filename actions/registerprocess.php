<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once '../controllers/customercontroller.php';

$controller = new CustomerController();

$controller->register();

