<?php
require_once "../classes/order_class.php";


function add_order_controller($customer_id, $invoice, $order_date, $status) {
    $newOrder = new order_class();
    return $newOrder->add_orders($customer_id, $invoice, $order_date, $status);

}

// function delete_brand_controller($brandId) {
//     $newBrand = new brandClass();
//     return $newBrand->deleteBrand($brandId);
// }

// function get_brands_controller() {
//     $newBrand = new brandClass();
//     return $newBrand->getBrands();
// }
    

   