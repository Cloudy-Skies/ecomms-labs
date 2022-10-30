<?php
require ('../Classes/customer_class.php');

//edit,select,update, delete function

//takes 7 vars
function addCustomer_ctr($name,$email,$password,$country,$city,$contact,$role){
    $add_customer = new CustomerClass();

    $add_customer-> addCustomer_cls($name,$email,$password,$country,$city,$contact,$role);
    return $add_customer;
}

/**
 * @var $var1 is the customer email to be checked
 */
function selCustomerEmail_ctr($email){
    $select_customer_email = new CustomerClass();

    $select_customer_email->selectCustomerEmail_cls($email);
    return $select_customer_email;

}

function selCustomerPassword_ctr($password){
    $select_customer_password = new CustomerClass();

    $selectpassword= $select_customer_password->selectCustomerPassword_cls($password);
    //var_dump($selectpassword);

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