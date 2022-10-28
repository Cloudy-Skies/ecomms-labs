<?php

include"../Controllers/customer_controller.php";

if (ISSET($_POST['addSubmit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    $country=$_POST['country'];
    $city=$_POST['city'];
    $number=$_POST['cnumber'];
    $email=$_POST['email'];
    $image=$_POST['image'];

    echo $name;

    addCustomer_ctr($name,$email,$password,$country,$city,$number,$image);
}
?>