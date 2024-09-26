<?php
require("../settings/db_class.php");

class CustomerClass extends db_connection {

    public function addCustomer($fullName, $email, $password, $country, $city, $contact, $role) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);  
        
        // Escape inputs to prevent SQL injection
        $fullName = mysqli_real_escape_string($this->db_connect(), $fullName);
        $email = mysqli_real_escape_string($this->db_connect(), $email);
        $country = mysqli_real_escape_string($this->db_connect(), $country);
        $city = mysqli_real_escape_string($this->db_connect(), $city);
        $contact = mysqli_real_escape_string($this->db_connect(), $contact);
        $role = mysqli_real_escape_string($this->db_connect(), $role);

        $sql = "INSERT INTO customer (customer_name, customer_email, customer_pass, customer_country, customer_city, customer_contact, user_role)
                VALUES ('$fullName', '$email', '$hashedPassword', '$country', '$city', '$contact', '$role')";
        
        return $this->db_query($sql);
    }

    public function isEmailAvailable($email) {
        $email = mysqli_real_escape_string($this->db_connect(), $email);
        $sql = "SELECT * FROM customer WHERE customer_email='$email'";
        $result = $this->db_fetch_all($sql);
        return count($result) === 0; 
    }

    
    public function login($email, $password) {
        $email = mysqli_real_escape_string($this->db_connect(), $email);
        $sql = "SELECT * FROM customer WHERE customer_email='$email'";
        $result = $this->db_fetch_one($sql);

        if ($result) {
            if (password_verify($password, $result['customer_pass'])) {
                session_start();
                $_SESSION['id'] = $result['customer_id'];
                $_SESSION['role'] = $result['user_role'];
                return true; 
            }
        }
        return false; // Login failed
    }

    public function updateCustomer($id, $fullName, $email, $country, $city, $contact, $role) {
        // Escape inputs to prevent SQL injection
        $id = mysqli_real_escape_string($this->db_connect(), $id);
        $fullName = mysqli_real_escape_string($this->db_connect(), $fullName);
        $email = mysqli_real_escape_string($this->db_connect(), $email);
        $country = mysqli_real_escape_string($this->db_connect(), $country);
        $city = mysqli_real_escape_string($this->db_connect(), $city);
        $contact = mysqli_real_escape_string($this->db_connect(), $contact);
        $role = mysqli_real_escape_string($this->db_connect(), $role);

        $sql = "UPDATE customer 
                SET customer_name='$fullName', customer_email='$email', customer_country='$country', customer_city='$city', customer_contact='$contact', user_role='$role'
                WHERE customer_id='$id'";
        
        return $this->db_query($sql);
    }

    public function deleteCustomer($id) {
        $id = mysqli_real_escape_string($this->db_connect(), $id);
        $sql = "DELETE FROM customer WHERE customer_id='$id'";
        return $this->db_query($sql);
    }
    public function fetchAllCustomers() {
        $sql = "SELECT * FROM customer";
        return $this->db_fetch_all($sql);
    }

    public function fetchCustomerByID($id) {
        $id = mysqli_real_escape_string($this->db_connect(), $id);
        $sql = "SELECT * FROM customer WHERE customer_id='$id'";
        return $this->db_fetch_one($sql);
    }
}
