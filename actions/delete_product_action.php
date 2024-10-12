<?php

require_once '../controllers/productcontroller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_product'])) {
        $productId = $_POST['product_id'] ?? '';

        if (!empty($productId)) { 
            $deleteProduct = delete_product_controller($productId);
            if ($deleteProduct !== false) {
                header('Location: ../view/products.php');
                exit; 
            } else {
                echo 'Error deleting product. Try again.';
            }
        } else {
            echo 'Product ID is missing.';
        }
    }
}


