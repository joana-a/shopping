 <?php
 include ("../classes/cart_class.php");

 function addtoCart_ctr($productId, $ipAddress, $customerId, $quantity){
    $cartClass= new cart_class();
    $result= $cartClass->addtoCart($productId, $ipAddress,$customerId, $quantity);
    return $result;
 } 

 function viewCart_ctr(){
   $cartClass= new cart_class(); 
   return $cartClass->viewCart();
 }

 function deleteCart_ctr($productId){
   $cartClass= new cart_class();
   return $cartClass->deleteCart($productId);
 }

 function updateCart_ctr($productId, $quantity){
   $cartClass= new cart_class();
   return $cartClass->updateCart($productId, $quantity);
 }