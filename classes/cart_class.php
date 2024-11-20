<?php
require_once("../settings/db_class.php");

class cart_class extends db_connection {
    public function addToCart($productId, $ipAddress, $customerId, $quantity) {
        $ndb = new db_connection();
        $productId = mysqli_real_escape_string($ndb->db_conn(), $productId);
        $ipAddress = mysqli_real_escape_string($ndb->db_conn(), $ipAddress);
        $customerId = mysqli_real_escape_string($ndb->db_conn(), $customerId);
        $quantity = mysqli_real_escape_string($ndb->db_conn(), $quantity);
    
        $sql = "SELECT * FROM `cart` WHERE `p_id` = '$productId' AND `ip_add` = '$ipAddress' AND `c_id` = '$customerId'";
        $result = $this->db_fetch_one($sql);

        if ($result) {
            $newQuantity = $result['qty'] + $quantity;
            $sqlUpdate = "UPDATE `cart` SET `qty` = '$newQuantity' 
            WHERE `p_id` = '$productId' AND `ip_add` = '$ipAddress' AND `c_id` = '$customerId'";
            return $this->db_query($sqlUpdate);
        } else {
            $sqlInsert = "INSERT INTO `cart` (`p_id`, `ip_add`, `c_id`, `qty`)
            VALUES ('$productId', '$ipAddress', '$customerId', '$quantity')";
            return $this->db_query($sqlInsert);
        }
    } 

    public function updateCart($productId, $quantity) {
        $ndb = new db_connection();
        $productId = mysqli_real_escape_string($ndb->db_conn(), $productId);
        $quantity = mysqli_real_escape_string($ndb->db_conn(), $quantity);
        
        $sql = "UPDATE `cart` SET `qty` = '$quantity' WHERE `p_id` = '$productId'";
        return $this->db_query($sql);
    }

    public function viewCart($customerId){
        $ndb = new db_connection();
        $sql= "SELECT products.product_title, products.product_price, cart.qty, cart.p_id
        FROM cart
        JOIN products ON cart.p_id = products.product_id  WHERE c_id = $customerId ";
        
        return $this->db_fetch_all($sql); 

    }

    public function deleteCart($productId) {
        $productId = mysqli_real_escape_string($this->db_conn(), $productId);
        $sql = "DELETE FROM cart WHERE p_id = '$productId'";
        return $this->db_query($sql);
    }
}
