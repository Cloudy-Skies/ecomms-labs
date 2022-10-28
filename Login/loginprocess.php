<?php
//     $pword = $_POST['customer_pass'];
//     $email = $_POST['customer_email'];
// 
include "../Controllers/customer_controller.php";

if (ISSET($_POST['addLogin'])) {
    $email=$_POST['email'];
    $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
    // echo $name;
    // echo $email;
    // echo $password;
    // echo $country;
    // echo $city;
    // echo $number;
    // echo $email;
    //addCustomer_ctr($name,$email,$password,$country,$city,$number,$image);
    var_dump(addCustomer_ctr($name,$email,$password,$country,$city,$number,$image));


    //checking email
    $email_check=selCustomerEmail_ctr($email);
    if (empty($email_check)) {
        echo 'No email detected';
    }
    else {
        echo 'Email exists';
    }

}


?>