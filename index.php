<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Ecomms Labs</h1>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">EC Labs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="./Login/register.php">Register </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./Login/ogin.php">LogIn </a>
            </li>

            <?php
                require 'Settings/core.php';

                // put this in a function in core.php (login_menu())
                login_menu('./login/login.php', '#');
                brand_menu_item('./admin/Brand.php');
            ?>
              
            </ul>
        </div>
    	</nav>

        <!-- bootstrap -->
        <script 
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
    <?php

    // session_start();
    // if (isset($_SESSION["loggedin"]) &&$_SESSION["loggedin"]===true) {
    //     echo '<a href="Login\logout.php">Logout</a>';
    // }
    // else {
    //     if (isset($_SESSION["loggedin"]) &&$_SESSION["loggedin"]===true) {
    //         echo '<a href="Login\login.php">Login</a>';
    //     }
    
    // }
    ?>
</body>
</html>