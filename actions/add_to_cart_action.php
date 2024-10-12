 <?php
 require "../controllers/cart_controller.php";

 session_start();

 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $product_id= $_POST['product_id'];
    $ipAddress= '';
    $customerID= $_SESSION['user_id'];
    $quantity= 1;
 }

 $addProductResult = addtoCart_ctr($product_id, $ipAddress, $customerID, $quantity);
 if ($addProductResult!==false){
    header("Location:../view/home.php");
 }else {
    echo "Error:Form not submitted.";
 } 