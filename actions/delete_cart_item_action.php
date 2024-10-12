<?php

require_once '../controllers/cart_controller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_item'])) {
        $productId = $_POST['p_id'] ?? '';

        if (!empty($productId)) { 
            $deleteCart = deleteCart_ctr($productId);
            if ($deleteCart !== false) {
                header('Location: ../view/cart.php');
                exit; 
            } else {
                echo 'Error deleting item from cart. Try again.';
            }
        } else {
            echo 'Product ID is missing.';
        }
    }
}


