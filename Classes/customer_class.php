<?php
require('../Settings/db_class.php');

class CustomerClass extends db_connection
{
    
    //add function
    public function addCustomer_cls($cname,$cemail,$cpass,$ccountry,$ccity,$cnum)
    {
        $sql = "INSERT INTO customer ('customer_name','customer_email','customer_pass','customer_country','customer_city','customer_contact') VALUES ('$cname,$cemail,$cpass,$ccountry,$ccity,$cnum')";

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

}

?>
