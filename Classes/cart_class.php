<?php
require_once "../Settings/db_class.php";

class CartClass extends db_connection
{
    /**
     * @param mixed $pid 
     * @param mixed $name
     * 
     */
    public function insert_into_cart($pid,$ip_add,$c_id,$qty) 
    {
        $sql = "INSERT INTO 'cart' ('p_id','ip_add','c_id','qty') VALUES ('$pid','$ip_add','$c_id','$qty')";
        return $this->query($sql);
    }

     //for customers who haven't logged in.
     public function insert_into_cart_null($pid, $ipadd, $qty){
        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `qty`) VALUES ('$pid', '$ipadd', '$qty')";

        //run the query
        return $this->query($sql);
    }

    //check for duplicate
    //logged in customers
    public function check_duplicate($pid, $cid){
        $sql = "SELECT `p_id`, `c_id` FROM `cart` WHERE `p_id`='$pid' AND `c_id`='$cid'";

        return $this->query($sql);
    }

    //not logged in customers
    public function check_duplicate_null($pid, $ipadd){
        $sql = "SELECT `ip_add`, `p_id` FROM `cart` WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        return $this->query($sql);
    }

    //display cart
    //logged in customers
    public function display_cart($cid){
        $sql = "SELECT `cart`.`p_id`, `cart`.`c_id`, `cart`.`qty`, `products`.`product_title`, `products`.`product_price`, `products`.`product_image` FROM `cart`
        JOIN `products` on (`cart`.`p_id` = `products`.`product_id`)
        WHERE `cart`.`c_id` = '$cid'";

        //run the query
        return $this->query($sql);
    }

    //not logged in customers
    public function display_cart_null($ipadd){
        $sql = "SELECT `cart`.`p_id`, `cart`.`ip_add`, `cart`.`qty`, `products`.`product_title`, `products`.`product_price`, `products`.`product_image` FROM `cart`
        JOIN `products` on (`cart`.`p_id` = `products`.`product_id`)
        WHERE `cart`.`ip_add` = '$ipadd'";

        //run the query
        return $this->query($sql);
    }

    //get cart totals
    //logged and not logged in customers
    public function cart_total($cid){
        $sql = "SELECT count(`c_id`) AS `count` FROM `cart` WHERE `c_id`='$cid'";
        return $this->query($sql);
    }

    public function cart_total_null($ipadd){
        $sql = "SELECT count(`ip_add`) AS `count` FROM `cart` WHERE `ip_add`='$ipadd'";
        return $this->query($sql);
    }

    //update cart
    //logged in customers
    public function update_cart($cid, $pid, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `c_id`='$cid' AND `p_id`='$pid'";

        //run the query
        return $this->query($sql);
    }

    //not logged in customers
    public function update_cart_null($ipadd, $pid, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        //run the query
        return $this->query($sql);
    }

    //delete from cart
    //logged in customers
    public function delete_cart($cid,$pid){
        $sql = "DELETE FROM `cart` WHERE `c_id`='$cid' AND `p_id`='$pid'";

        //run the query
        return $this->query($sql);
    }

    //not logged in customers
    public function delete_cart_null($ipadd, $pid){
        $sql = "DELETE FROM `cart` WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        //run the query
        return $this->query($sql);
    }

    //get cart total
    //logged in customers
    public function cart_value($cid){
        $sql="SELECT SUM(`products`.`product_price`*`cart`.`qty`) as Result
FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`c_id`='$cid'";

        return $this->query($sql);
    }

     //not logged in customers
     public function cart_value_null($ipadd){
        $sql="SELECT SUM(`products`.`product_price`*`cart`.`qty`) as Result
FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`ip_add`='$ipadd'";

        return $this->query($sql);
    }

    public function update_cart_with_cID($cid, $ip_add){
        $sql = "UPDATE `cart` SET `c_id`='$cid' WHERE `ip_add`='$ip_add'";
        return $this->query($sql);
    }

    //function to add to orders
    public function add_order($cid, $inv_no, $ord_date, $ord_stat){
        $sql = "INSERT INTO `orders`(`customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$cid','$inv_no','$ord_date','$ord_stat')";
        return $this->query($sql);
    }

    //function to add to order details
    public function add_order_details($ord_id, $prod_id, $qty){
        $sql = "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$ord_id','$prod_id','$qty')";
        return $this->query($sql);
    }

    public function add_payment($amt, $cid, $ord_id, $currency, $pay_date){
        $sql = "INSERT INTO `payment`(`amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amt','$cid','$ord_id','$currency','$pay_date')";
        return $this->query($sql);
    }

    public function recent_order(){
        $sql = "SELECT MAX(`order_id`) as recent FROM `orders`";
        return $this->query($sql);
    }

    public function delete_cart_all($cid){
        $sql = "DELETE FROM `cart` WHERE `c_id`='$cid'";
        return $this->query($sql);
    }

    public function get_order($ord_id){
        $sql = "SELECT  `customer`.`customer_name`, `orders`.`order_id`, `orders`.`invoice_no`, `orders`.`order_date`, `orders`.`order_status` FROM `orders` JOIN `customer` ON (`customer`.`customer_id` = `orders`.`customer_id`) WHERE `orders`.`order_id` = '$ord_id'";
        return $this->query($sql);
    }

    public function get_order_details($ord_id){
        $sql = "SELECT `products`.`product_title`, 	`products`.`product_price`, `orderdetails`.`qty`, `orderdetails`.`qty`*`products`.`product_price` as result FROM `orderdetails` JOIN `products` ON (`orderdetails`.`product_id` = `products`.`product_id`) WHERE `order_id`='$ord_id'";
        return $this->query($sql);
    }





}


?>