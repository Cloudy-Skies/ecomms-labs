<?php
require ('../Classes/customer_class.php');

//edit,select,update, delete function

//takes 7 vars
function addCustomer_ctr($var1,$var2,$var3,$var4,$var5,$var6,$var7){
    $add_customer = new CustomerClass();

    $add_customer-> addCustomer_cls($var1,$var2,$var3,$var4,$var5,$var6,$var7);
    return $add_customer;
}

/**
 * @var $var1 is the customer email to be checked
 */
function selCustomerEmail_ctr($var1){
    $select_customer_email = new CustomerClass();

    $select_customer_email->selectCustomerEmail_cls($var1);
    return $select_customer_email;

}

//TODO:
function get_all_customer_ctr()
{
    # code...
}

//TODO:
function edit_customer_ctr()
{
    # code...
}
?>