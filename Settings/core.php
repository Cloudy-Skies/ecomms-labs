<?php

//start session
session_start();

//obtain current page name
$current_file = $_SERVER['SCRIPT_NAME'];


//check login
function check_login()
{
    //checking login status
    if (!isset($_SESSION['customer_id'])) {

        //redirect to login
        header('Location: Login/login.php');
    }
}

//checking permission
function check_permission()
{
    //get user role
    if (isset($_SESSION['user_role'])) {
        //return role to array
        return $_SESSION['user_role'];
    }
}

//checking email
function check_email($error)
{
    if (isset($_SESSION['email'])) {
        echo "
        <script>
        alert('$error');
        console.log('email error')
        </script>
        ";
        unset($_SESSION['email']);
    }else {
        unset($_SESSION['email']);
    }
}

function check_login_details()
{
    # code...
}

// function to display login menu
function login_menu($loginpath, $logoutpath){
	if(isset($_SESSION['customer_id'])){
		echo "
			<li class='nav-item'>
			<a class='nav-link' href='$loginpath'>Logout</a>
			</li>         
			";
		}else{
			echo "
			<li class='nav-item'>
			<a class='nav-link' href='$logoutpath'Login</a>
			</li>         
			";
		}
}

function brand_menu_item($path){
	if(check_permission() == 1){
		echo "
		<li class='nav-item'>
			<a class='nav-link' href='${path}'>Brand</a>
		</li> 
		";
	}
}

