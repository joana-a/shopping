<?php
include_once("../classes/customerclass.php");



function registerUser_ctr($customer_name, $email, $password, $country, $city, $contact_no, $user_role){
	$adduser=new customer_class();
	$result = $adduser->registerUser($customer_name, $email, $password, $country, $city, $contact_no, $user_role);
}


function loginUser_ctr($email, $password) {
	$loginClass = new customer_class();
	$result = $loginClass->loginUser($email, $password);

    
    return $result;
}
function get_customers_controller() {
    $newProduct = new customer_class();
    return $newProduct->viewAllCustomers();
} 


 
 

















