<?php
require_once("../Controllers/car_tcontroller.php");
$pid = $_GET['pid'];
$qty = $_GET['qty'];
function getRealIpAddr(){
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
if (isset($_SESSION['customer_id'])){
    $cid = $_SESSION['customer_id'];
    $updateCart = update_cart_ctr($cid, $pid, $qty);
    if($updateCart){
        header("location: ../View/cart.php");
    }else{
        echo "something went wrong";
    }
}else{
    $ipadd = getRealIpAddr();
    $updateCart = update_cart_null_ctr($ipadd, $pid, $qty);
    if($updateCart){
        header("location: ../View/cart.php");
    }else{
        echo "something went wrong";
    }
}
?>