<?php
require_once("../Controllers/cart_controller.php");
function get_real_ip(){
 if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
  // Check IP from internet.
  $ip = $_SERVER['HTTP_CLIENT_IP'];
 } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
  // Check IP is passed from proxy.
  $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
 } else {
  // Get IP address from remote address.
  $ip = $_SERVER['REMOTE_ADDR'];
 }
 return $ip;
}
session_start();
if(isset($_GET['id'])){

    $pid = $_GET['id'];
    $ipadd = get_real_ip();

    if(isset($_SESSION['customer_id'])){
       $cid = $_SESSION['customer_id'];
        $delete = delete_cart_ctr($cid,$pid);
        if($delete){
            header("location: ../View/cart.php");
        }else{
            echo "something went wrong";
        }
    }else{
       $delete = delete_cart_null_ctr($ipadd,$pid);
        if($delete){
            header("location: ../View/cart.php");
        }else{
            echo "something went wrong";
        }
    }

}else{
    header("location: ../index.php");
}

?>