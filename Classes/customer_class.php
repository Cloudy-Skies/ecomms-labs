<?php
require ('../Settings/db_class.php');

class CustomerClass extends db_connection
{
    //add function
    //expects 7
    public function add_customer_cls($name,$email,$pass,$country,$city,$contact,$image)
    {
        //new user has user role2
        $user_role='2';

        $sql = "INSERT INTO customer(customer_name,customer_email,customer_pass,
        customer_country,customer_city,customer_contact,
        customer_image,user_role) 
        VALUES 
        ('$name','$email','$pass','$country','$city','$contact','$image',$user_role)";

        return $this->db_query($sql);
    }

    //TODO
    function edit_customer_cls($id,$name,$email,$country,$city,$contact)
    {
        $sql= "UPDATE customer set customer_name=$name,customer_email=$email,customer_country=$country,customer_city=$city,customer_contact=$contact WHERE id = $id";
        return $this->db_query($sql);
    }

    //TODO
    function delete_customer_cls($id)
    {
        $sql="DELETE from customer WHERE customer_id=$id";
        return $this->db_query($sql);
    }

    function select_one_customer_cls($email)
    {
        $sql = "SELECT * from customer where 'customer_email'=$email";
        return $this->db_fetch_one($sql);
    }

    function selectCustomerPassword_cls($email){
        $sql = "SELECT customer_pass from customer where 'customer_email'=$email ";
        //var_dump($this->db_fetch_one($sql));
        return $this->db_fetch_one($sql);
    
    }

    function selAllCustomer(){
        $sql = "SELECT * from customer";
        return $this->db_fetch_all($sql);
    }

}
