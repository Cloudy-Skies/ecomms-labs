<?php
require('../Classes/customer_class.php');

//edit,select,update, delete function

function addCustomer_ctr($var1,$var2,$var3,$var4,$var5,$var6){
    $add_customer = new CustomerClass();

    return $add_customer-> addCustomer_cls($var1,$var2,$var3,$var4,$var5,$var6);
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