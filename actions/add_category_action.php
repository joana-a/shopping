<?php

require_once '../controllers/categorycontroller.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $categoryName = $_POST['category']?? '';

    $addCategory = add_category_controller($categoryName);

    if ($addCategory !== false) {
        header('Location: ../view/categories.php');
    }  else {
        echo 'Error. Do it yourself';
    }

}



        

         
        



  