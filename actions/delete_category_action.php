<?php

require_once '../controllers/categorycontroller.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_category'])) {
        $catId = $_POST['cat_id'] ?? '';

        if (!empty($catId)) { 
            $deleteCategory = delete_category_controller($catId);
            if ($deleteCategory !== false) {
                header('Location: ../view/categories.php');
                exit; 
            } else {
                echo 'Error deleting category. Try again.';
            }
        } else {
            echo 'Category ID is missing.';
        }
    }
}


