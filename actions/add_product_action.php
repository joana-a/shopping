<?php

require_once '../controllers/productcontroller.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category = $_POST['category']?? '';
    $brand = $_POST['brand']?? '';
    $title = $_POST['title']?? '';
    $price = $_POST['price']?? '';
    $description = $_POST['description']?? '';
    $keywords = $_POST['keywords']?? '';


    $addProduct = add_product_controller($category, $brand, $title, $price, $description, $keywords);

    if ($addProduct !== false) {
        header('Location: ../view/products.php');
    }  else {
        echo 'Error. Do it yourself';
    }
 
}
 


        

         
        



