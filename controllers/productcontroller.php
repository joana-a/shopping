<?php
require_once "../classes/product_class.php";


function add_product_controller($category, $brand, $title, $price, $description, $keywords) {
    $newProduct = new ProductClass();
    return $newProduct->add_product($category, $brand, $title, $price, $description, $keywords);

}

function delete_product_controller($productId) {
    $newProduct = new productClass();
    return $newProduct->deleteProduct($productId);
}
function get_products_controller() {
    $newProduct = new productClass();
    return $newProduct->viewAllProduct();
}
    

 