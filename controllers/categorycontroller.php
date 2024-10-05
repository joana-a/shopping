<?php
require_once "../classes/categoryclass.php";


function add_category_controller($categoryName) {
    $newCategory = new categoryClass();
    return $newCategory->add_category($categoryName);

}

function delete_category_controller($categoryId) {
    $newBrand = new categoryClass();
    return $newBrand->deleteCategory($categoryId);
}
function get_categories_controller() {
    $newCategory = new categoryClass();
    return $newCategory->getCategories();
}  

    

   