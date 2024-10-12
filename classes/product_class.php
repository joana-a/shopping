<?php
require_once("../settings/db_class.php");
class productClass extends db_connection
{

    public function add_product($category, $brand, $title, $price, $description, $keywords)
{
    $ndb = new db_connection();
    $category = mysqli_real_escape_string($ndb->db_conn(), $category);
    $brand = mysqli_real_escape_string($ndb->db_conn(), $brand);
    $title = mysqli_real_escape_string($ndb->db_conn(), $title);
    $price = mysqli_real_escape_string($ndb->db_conn(), $price);
    $description = mysqli_real_escape_string($ndb->db_conn(), $description);
    $keywords = mysqli_real_escape_string($ndb->db_conn(), $keywords);

    $sql = "INSERT INTO `products`(`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) 
            VALUES (NULL, '$category', '$brand', '$title', '$price', '$description', '', '$keywords')";
            
    return $this->db_query($sql);
}


    public function deleteProduct($productId) {
        $productId = mysqli_real_escape_string($this->db_conn(), $productId);
        $sql = "DELETE FROM products WHERE product_id = '$productId'";
        return $this->db_query($sql);
    }

    public function viewAllProduct(){
        $ndb = new db_connection();
        $sql = "SELECT * FROM products";
        return $this->db_fetch_all($sql); 

    }
} 