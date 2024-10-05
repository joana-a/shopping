<?php

require_once '../controllers/brandcontroller.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brandName = $_POST['brand']?? '';

    $addBrand = add_brand_controller($brandName);

    if ($addBrand !== false) {
        header('Location: ../view/brand.php');
    }  else {
        echo 'Error. Do it yourself';
    }

}



        

         
        



