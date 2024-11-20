<?php
 require "../controllers/order_controller.php";
 require "../controllers/cart_controller.php";

 session_start();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $customer_id= $_SESSION['user_id'];
    $invoice= rand (1000000, 9999999);
    $order_date= date("Y-m-d");
    $status= 'Pending';
    
 }

 $addOrderResult = add_order_controller($customer_id, $invoice, $order_date, $status);
 if ($addOrderResult!==false){
    header("Location:../view/checkout.php");
 }else {
    echo "Error:Form not submitted.";
 }