<?php
require_once("../settings/db_class.php");

class order_class extends db_connection {


    public function add_orders($customer_id, $invoice, $order_date, $status)

    {
        $ndb= new db_connection();
        $customer_id= mysqli_real_escape_string($ndb->db_conn(), $customer_id);
        $invoice = mysqli_real_escape_string($this->db_conn(), $invoice);
        $order_date = mysqli_real_escape_string($this->db_conn(), $order_date);
        $status = mysqli_real_escape_string($this->db_conn(), $status);

        $sql = "INSERT INTO orders (customer_id, invoice_no, order_date, order_status)
                VALUES ('$customer_id', '$invoice', '$order_date', '$status)"; 
        
                return $this->db_query($sql);
    }

    // public function deleteBrand($brandId) {
    //     $brandId = mysqli_real_escape_string($this->db_conn(), $brandId);
    //     $sql = "DELETE FROM brands WHERE brand_id = '$brandId'";
    //     return $this->db_query($sql);
    // }

    // public function getBrands() {
    //     $sql = "SELECT * FROM brands";
    //     return $this->db_fetch_all($sql);

      
    // }

}
