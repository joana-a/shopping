<?php
require_once "../classes/brandclass.php";


function add_brand_controller($brandName) {
    $newBrand = new brandClass();
    return $newBrand->add_brand($brandName);

}

function delete_brand_controller($brandId) {
    $newBrand = new brandClass();
    return $newBrand->deleteBrand($brandId);
}

function get_brands_controller() {
    $newBrand = new brandClass();
    return $newBrand->getBrands();
}
    

   