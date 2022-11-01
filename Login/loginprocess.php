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


    $data = select_one_customer_controller($email);
    if (!$data){
        $_SESSION['email_password_set'] = true; 
        echo 'email does not exist';
        header('Location: ../login.php');
    }else{
        $hash = $data['customer_pass'];
        $authenticated = password_verify($password, $hash);
    
        if($authenticated ){
            $_SESSION['customer_id'] = $data['customer_id'];
            $_SESSION['customer_email'] = $data['customer_email'];
            $_SESSION['user_role'] = $data['user_role'];
            header('Location: ../index.php');
        }else{
            $_SESSION['email_password_set'] = true; 
            echo 'email does not exist';
            header('Location: ./login.php');
        }
    }
   
    //checking email
    // $email_check=select_one_customer_controller($email);
    // $password_check=selCustomerPassword_ctr($email);
    // if (empty($email_check)) {
    //     echo 'No email detected';
    // }
    // elseif (password_verify($password,$password_check['customer_pass'])) {
    //     if ($email_check['user_role']==2) {

    //         session_start();

    //         $_SESSION["loggedin"]=true;
    //         $_SESSION["customer_id"]=$email_check['customer_id'];
    //         $_SESSION["user_role"]=$email_check['user_role'];
    //     }

    //     //admin section
    // }
    // else {
    //     echo 'Email or password is wrong';
    //     echo $password;
    //     //var_dump( $password_check);
    //     $password_check;
    // }

    

    // $password_check=selCustomerPassword_ctr($password);

}


?>