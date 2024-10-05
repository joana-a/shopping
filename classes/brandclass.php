<?php
require_once("../settings/db_class.php");

class brandClass extends db_connection {
    public function add_brand($brandName)
    {
        $brandName = mysqli_real_escape_string($this->db_conn(), $brandName);
        $sql = "INSERT INTO brands (brand_name)
                VALUES ('$brandName')"; 
        
        return $this->db_query($sql);
    }

    public function deleteBrand($brandId) {
        $brandId = mysqli_real_escape_string($this->db_conn(), $brandId);
        $sql = "DELETE FROM brands WHERE brand_id = '$brandId'";
        return $this->db_query($sql);
    }

    public function getBrands() {
        $sql = "SELECT * FROM brands";
        return $this->db_fetch_all($sql);

      
    }

}
