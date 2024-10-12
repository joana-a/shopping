<?php
require("../settings/db_class.php");

class customer_class extends db_connection
{
	public function registerUser($customer_name, $email, $password, $country, $city, $contact_no, $user_role)
    {
        $ndb = new db_connection();
        
        $customer_name = mysqli_real_escape_string($ndb->db_conn(), $customer_name);
        $email = mysqli_real_escape_string($ndb->db_conn(), $email);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $country = mysqli_real_escape_string($ndb->db_conn(), $country);
		$city = mysqli_real_escape_string($ndb->db_conn(), $city);
        $contact_no = mysqli_real_escape_string($ndb->db_conn(), $contact_no);
        $user_role = mysqli_real_escape_string($ndb->db_conn(), $user_role);

        
        $sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `user_role`) 
        VALUES ('$customer_name', '$email', '$password', '$country', '$city', '$contact_no', '$user_role')";
        return $this->db_query($sql);
	}
 
	
    public function loginUser($email, $password)
    {
        $ndb = new db_connection();
        
        $email = mysqli_real_escape_string($ndb->db_conn(), $email);
        $password = mysqli_real_escape_string($ndb->db_conn(), $password);
        
        $sql = "SELECT * FROM `customer` WHERE `customer_email` = '$email'";
        $result = $this->db_fetch_one($sql);
        
        if (!$result) {
            echo "Error: " . mysqli_error($ndb->db_conn());
            return false;
        }
        
        if ($result != null){

            echo "There is a record in db";
            $user = $result;
            if (password_verify($password, $user['customer_pass'])) {
                return $user;
            } else {
                echo "password is wrong";
                return false;
            }
        } else {
            echo "Not Found";
            return false;
        }
    }

    public function viewAllCustomers(){
        $ndb = new db_connection();
        $sql = "SELECT * FROM customers";
        return $this->db_fetch_all($sql); 

    }
      
}




