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






















// <?php
// if (session_status() == PHP_SESSION_NONE) {
//     session_start();
// }

// require_once "../classes/addcustomer.php";

// class CustomerController {

//     // Register a new customer
//     public function register() {
//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             $customer = new CustomerClass(); 
            
//             // Sanitize inputs
//             $fullName = $this->sanitizeInput($_POST['full_name'] ?? '');
//             $email = $this->sanitizeInput($_POST['email'] ?? '');
//             $password = $this->sanitizeInput($_POST['password'] ?? '');
//             $country = $this->sanitizeInput($_POST['country'] ?? '');
//             $city = $this->sanitizeInput($_POST['city'] ?? '');
//             $contact = $this->sanitizeInput($_POST['contact'] ?? '');
//             $role = 2;  // Default role for a customer

//             // Validate required fields
//             if (empty($fullName) || empty($email) || empty($password) || empty($country) || empty($city) || empty($contact)) {
//                 $_SESSION['error'] = 'All fields are required.';
//                 header("Location: ../login/register.php");
//                 exit();
//             }

//             if (!$customer->isEmailAvailable($email)) {
//                 $_SESSION['error'] = 'Email already exists.';
//                 header("Location: ../login/register.php");
//                 exit();
//             }

//             if ($customer->addCustomer($fullName, $email, $password, $country, $city, $contact, $role)) {
//                 $_SESSION['success'] = 'Registration successful. Please login.';
//                 header("Location: ../login/login.php");
//                 exit();
//             } else {
//                 $_SESSION['error'] = 'Registration failed. Please try again.';
//                 header("Location: ../login/register.php");
//                 exit();
//             }
//         }
//     }

//     public function login() {
//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             $customer = new CustomerClass();
            
//             // Sanitize inputs
//             $email = $this->sanitizeInput($_POST['email'] ?? '');
//             $password = $this->sanitizeInput($_POST['password'] ?? '');

//             // Validate required fields
//             if (empty($email) || empty($password)) {
//                 $_SESSION['error'] = 'Both email and password are required.';
//                 header("Location: ../login/login.php");
//                 exit();
//             } 

//             // Attempt to login
//             if ($customer->login($email, $password)) {
//                 $_SESSION['success'] = 'Login successful.';
//                 header("Location: ../index.php");
//                 exit();
//             } else {
//                 $_SESSION['error'] = 'Invalid email or password.';
//                 header("Location: ../login/login.php");
//                 exit();
//             }
//         }
//     }

//     // Logout a customer
//     public function logout() {
//         session_start();
//         session_destroy();
//         header("Location: ../login/login.php?success=loggedout");
//         exit();
//     }

//     // Update customer details
//     public function update() {
//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             $customer = new CustomerClass();
            
//             // Sanitize inputs
//             $id = $this->sanitizeInput($_POST['id'] ?? '');
//             $fullName = $this->sanitizeInput($_POST['full_name'] ?? '');
//             $email = $this->sanitizeInput($_POST['email'] ?? '');
//             $country = $this->sanitizeInput($_POST['country'] ?? '');
//             $city = $this->sanitizeInput($_POST['city'] ?? '');
//             $contact = $this->sanitizeInput($_POST['contact'] ?? '');
//             $role = $this->sanitizeInput($_POST['role'] ?? '');

//             // Validate required fields
//             if (empty($id) || empty($fullName) || empty($email) || empty($country) || empty($city) || empty($contact) || empty($role)) {
//                 $_SESSION['error'] = 'All fields are required.';
//                 header("Location: ../profile/edit.php");
//                 exit();
//             }

//             // Update the customer
//             if ($customer->updateCustomer($id, $fullName, $email, $country, $city, $contact, $role)) {
//                 $_SESSION['success'] = 'Profile updated successfully.';
//                 header("Location: ../profile/view.php");
//                 exit();
//             } else {
//                 $_SESSION['error'] = 'Update failed. Please try again.';
//                 header("Location: ../profile/edit.php");
//                 exit();
//             }
//         }
//     }

//     // Delete a customer
//     public function delete() {
//         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//             $customer = new CustomerClass();
            
//             // Sanitize input
//             $id = $this->sanitizeInput($_POST['id'] ?? '');

//             // Validate required field
//             if (empty($id)) {
//                 $_SESSION['error'] = 'Invalid customer ID.';
//                 header("Location: ../admin/customers.php");
//                 exit();
//             }

//             // Delete the customer
//             if ($customer->deleteCustomer($id)) {
//                 $_SESSION['success'] = 'Customer deleted successfully.';
//                 header("Location: ../admin/customers.php");
//                 exit();
//             } else {
//                 $_SESSION['error'] = 'Deletion failed. Please try again.';
//                 header("Location: ../admin/customers.php");
//                 exit();
//             }
//         }
//     }

//     // Helper method to sanitize input
//     private function sanitizeInput($data) {
//         return htmlspecialchars(stripslashes(trim($data)));
//     }
// }


