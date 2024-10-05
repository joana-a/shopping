<?php

require_once '../controllers/brandcontroller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_brand'])) {
        $brandId = $_POST['brand_id'] ?? '';

        if (!empty($brandId)) { 
            $deleteBrand = delete_brand_controller($brandId);
            if ($deleteBrand !== false) {
                header('Location: ../view/brand.php');
                exit; 
            } else {
                echo 'Error deleting brand. Try again.';
            }
        } else {
            echo 'Brand ID is missing.';
        }
    }
}


