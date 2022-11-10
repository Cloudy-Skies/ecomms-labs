<?php
// require ("../Classes/cart_class.php")

require_once("/../Classes/cart_class.php");
//require_once("././classes/cartclass.php");
/*
*cart controller to handle everything about the cart
*/

function insert_into_cart_ctr($pid, $ipadd, $cid, $qty){
    //create a new object
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->insert_into_cart($pid, $ipadd, $cid, $qty);

    //if query run successfully
    if ($runQuery){
        //return query result
        return $runQuery;
    }else{
        return false;
    }
}

function insert_into_cart_null_ctr($pid, $ipadd, $qty){
    //create a new object
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->insert_into_cart_null($pid, $ipadd, $qty);

    //if query run successfully
    if ($runQuery){
        //return query result
        return $runQuery;
    }else{
        return false;
    }
}

//check for duplicates
//logged in customer
function check_duplicate_ctr($pid, $cid){
    //create a new object
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->check_duplicate($pid, $cid);

    if ($runQuery){
        $record = $newCartObject->fetch($runQuery);
        if (!empty($record['p_id']) && !empty($record['c_id'])){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }

}

//check for duplicates
// not logged in customer
function check_duplicate_null_ctr($pid, $ipadd){
    //create a new object
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->check_duplicate_null($pid, $ipadd);

    if ($runQuery){
        $record = $newCartObject->fetch($runQuery);
        if (!empty($record['p_id']) && !empty($record['ip_add'])){
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function display_cart_ctr($cid){
    //create a new object
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->display_cart($cid);

    //check if query run
    if ($runQuery){
        //create array to start product details
        $prodArray = array();
        while ($record = $newCartObject->fetch($runQuery)){
            $prodArray[$record['p_id']] = [
                $record['c_id'],
                $record['qty'],
                $record['product_title'],
                $record['product_price'],
                $record['product_image']
            ];

            /*
            $prodArray['p_id'] = $record['p_id'];
            $prodArray['c_id'] = $record['c_id'];
            $prodArray['qty'] = $record['qty'];
            $prodArray['product_title'] = $record['product_title'];
            $prodArray['product_price'] = $record['product_price'];
            $prodArray['product_image'] = $record['product_image'];*/
        }

        return $prodArray;
    }else{
        return false;
    }
}

function display_cart_null_ctr($ipadd){
    //create a new object
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->display_cart_null($ipadd);

    //check if query run
    if ($runQuery){
        //create array to start product details
        $prodArray = array();
        while ($record = $newCartObject->fetch($runQuery)){
            $prodArray[$record['p_id']] = [
                $record['ip_add'],
                $record['qty'],
                $record['product_title'],
                $record['product_price'],
                $record['product_image']
            ];

        }

        return $prodArray;
    }else{
        return false;
    }
}

function cart_total_ctr($cid){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->cart_total($cid);

    //check if query run
    if($runQuery){
        $total = $newCartObject->fetch($runQuery);
        return $total;
    }else{
        return false;
    }
}

function cart_total_null_ctr($ipadd){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->cart_total_null($ipadd);

    //check if query run
    if($runQuery){
        $total = $newCartObject->fetch($runQuery);
        return $total;
    }else{
        return false;
    }
}

//update cart functions
//logged in customers
function update_cart_ctr($cid, $pid, $qty){
    //create a new object
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->update_cart($cid, $pid, $qty);

    //if query run successfully
    if ($runQuery){
        //return query result
        return $runQuery;
    }else{
        return false;
    }
}

//not logged in customers
function update_cart_null_ctr($ipadd, $pid, $qty){
    //create a new object
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->update_cart_null($ipadd, $pid, $qty);

    //if query run successfully
    if ($runQuery){
        //return query result
        return $runQuery;
    }else{
        return false;
    }
}

//delete from cart functions
//logged in customer
function delete_cart_ctr($cid,$pid){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->delete_cart($cid,$pid);

    //if query run successfully
    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

//not logged in customers
function delete_cart_null_ctr($ipadd,$pid){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->delete_cart_null($ipadd,$pid);

    //if query run successfully
    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}
function delete_cart_all_ctr($cid){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->delete_cart_all($cid);

    if ($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}


//cart value functions
//logged in customer
function cart_value_ctr($cid){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->cart_value($cid);

    if ($runQuery){
        $total = $newCartObject->fetch($runQuery);
        return $total;
    }else{
        return false;
    }
}

function cart_value_null_ctr($ipadd){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->cart_value_null($ipadd);

    if ($runQuery){
        $total = $newCartObject->fetch($runQuery);
        return $total;
    }else{
        return false;
    }
}

function update_cart_with_cID_ctr($cid, $ip_add){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->update_cart_with_cID($cid, $ip_add);

    if ($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function add_order_ctr($cid, $inv_no, $ord_date, $ord_stat){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->add_order($cid, $inv_no, $ord_date, $ord_stat);

    if ($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function add_order_details_ctr($ord_id, $prod_id, $qty){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->add_order_details($ord_id, $prod_id, $qty);

    if ($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function add_payment_ctr($amt, $cid, $ord_id, $currency, $pay_date){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->add_payment($amt, $cid, $ord_id, $currency, $pay_date);

    if ($runQuery){
        return $runQuery;
    }else{
        return false;
    }
}

function recent_order_ctr(){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->recent_order();
    if($runQuery){
        $recent = $newCartObject->fetch($runQuery);
        return $recent;
    }else{
        return false;
    }
}


function get_order_ctr($ord_id){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->get_order($ord_id);
    if($runQuery){
        $ord_arr = $newCartObject->fetch($runQuery);
        return $ord_arr;
    }else{
        return false;
    }
}

function get_order_details_ctr($ord_id){
    $newCartObject = new cartClass();

    $runQuery = $newCartObject->get_order_details($ord_id);
    if($runQuery){
        while($record = $newCartObject->fetch($runQuery)){
            $ord_arr[] = $record;
        }
        return $ord_arr;
    }else{
        return false;
    }
}

?>
?>