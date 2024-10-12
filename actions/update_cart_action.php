<?php
require "../controllers/cart_controller.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_id= $_POST['p_id'];
    $ipAddress= '';
    $customerID= $_SESSION['user_id'];
    $quantity= $_POST['qty'];
}

$updateProductResult = updateCart_ctr($product_id, $quantity);
if ($updateProductResult!==false){
    header("Location:../view/cart.php");
 }else {
    echo "Error:Form not submitted.";
 } 