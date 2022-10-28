<?php
require('../Settings/db_class.php');

class CustomerClass extends db_connection
{
    
    
    
    //add function
    //expects 7
    public function addCustomer_cls($cname,$cemail,$cpass,$ccountry,$ccity,$cnum,$cimage)
    {
        //new user has user role2
        $user_role=2;

        $sql = "INSERT INTO customer 
        ('customer_name','customer_email','customer_pass',
        'customer_country','customer_city','customer_contact',
        'customer_image','user_role') 
        VALUES 
        ('$cname,$cemail,$cpass,$ccountry,$ccity,$cnum,$cimage',$user_role)";

        return $this->db_query($sql);
    }

    //TODO
    function editCustomer()
    {
        # code...
    }

    //TODO
    function delCustomer()
    {
        # code...
    }

    function selCustomer($email)
    {
        $sql = "SELECT * from customer where 'customer_email'=$email";
        return $this->db_fetch_all($sql);
    }

    function selAllCustomer(){
        $sql = "SELECT * from customer";
        return $this->db_fetch_all($sql);
    }

}

?>
