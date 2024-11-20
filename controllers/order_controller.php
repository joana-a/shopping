<?php
require_once "../classes/order_class.php";


function add_order_controller($customer_id, $invoice, $order_date, $status) {
    $newOrder = new order_class();
    return $newOrder->add_orders($customer_id, $invoice, $order_date, $status);

}


    

   