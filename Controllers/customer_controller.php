<?php
require ('../Classes/customer_class.php');

//edit,select,update, delete function

//takes 7 vars
function add_customer_controller($name,$email,$password,$country,$city,$contact,$role){
    $customer_instance = new CustomerClass();
    return $customer_instance->add_customer_cls($name, $email, $password, $country, $city, $contact, $role);
}


function select_one_customer_controller($email){
    $select_one_customer = new CustomerClass();

    $select_one_customer->select_one_customer_cls($email);
    return $select_one_customer;

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
function edit_customer_controller($id,$name,$email,$password,$country,$city,$contact,$role)
{
    $customer_instance = new CustomerClass();
    return $customer_instance->edit_customer_cls($id,$name,$email,$password,$country,$city,$contact,$role);
}
?>