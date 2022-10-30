<?php
//     $pword = $_POST['customer_pass'];
//     $email = $_POST['customer_email'];
// 
include "../Controllers/customer_controller.php";

if (ISSET($_POST['login'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    // echo $name;
    // echo $email;
    // echo $password;
    // echo $country;
    // echo $city;
    // echo $number;
    // echo $email;
    //addCustomer_ctr($name,$email,$password,$country,$city,$number,$image);
    // var_dump(addCustomer_ctr($name,$email,$password,$country,$city,$number,$image));


    //checking email
    $email_check=selCustomerEmail_ctr($email);
    $password_check=selCustomerPassword_ctr($email);
    if (empty($email_check)) {
        echo 'No email detected';
    }
    elseif (password_verify($password,$password_check['customer_pass'])) {
        if ($email_check['user_role']==2) {

            session_start();

            $_SESSION["loggedin"]=true;
            $_SESSION["customer_id"]=$email_check['customer_id'];
            $_SESSION["user_role"]=$email_check['user_role'];
        }

        //admin section
    }
    else {
        echo 'Email or password is wrong';
        echo $password;
        //var_dump( $password_check);
        $password_check;
    }

    

    $password_check=selCustomerPassword_ctr($password);

}


?>