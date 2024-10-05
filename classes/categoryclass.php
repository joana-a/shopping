<?php
require_once("../settings/db_class.php");

class categoryClass extends db_connection {
    public function add_category($categoryName)
    {  
        $ndb= new db_connection();
        $categoryName = mysqli_real_escape_string($this->db_conn(), $categoryName);
        $sql = "INSERT INTO categories (cat_name)
                VALUES ('$categoryName')";
        
        return $this->db_query($sql);  
    }

    public function deleteCategory($categoryId) {
        $categoryId = mysqli_real_escape_string($this->db_conn(), $categoryId);
        $sql = "DELETE FROM categories WHERE cat_id = '$categoryId'";
        return $this->db_query($sql);
    } 

    public function getCategories() {
        $ndb= new db_connection();
        $sql = "SELECT * FROM categories";
        return $this->db_fetch_all($sql);

      
    }

}
