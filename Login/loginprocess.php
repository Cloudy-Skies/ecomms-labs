<?php

include "../Controllers/customer_controller.php";
include "../Settings/core.php";

// Taking data from form
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo 'testing';
    // echo "<br>";

    // retrieving customer from database
    $data = select_one_customer_controller($email);
    // var_dump($data);

    //Redirect to login if user does not exist in db
    if (!$data) {
        $_SESSION['email_password_set'] = true;
        //echo 'email does not exist';
        header('Location: login.php');
    } 
    else {

        $hash = $data['customer_pass'];
        //bool to check if password and password hash match
        $authenticated = password_verify($password, $hash);


        //stores session data if password and password hash are equal: 
        if ($authenticated) {
            $_SESSION['loggedIn']=true;
            $_SESSION['customer_id'] = $data['customer_id'];
            $_SESSION['customer_email'] = $data['customer_email'];
            $_SESSION['user_role'] = $data['user_role'];
            //redirect to index
            header('Location: ../index.php');
        }
        //redirects to login if pwd and pwd hash are unequal 
        else {
            $_SESSION['email_password_set'] = true;
            //echo 'email does not exist';
            header('Location: login.php');
        }
    }



}
