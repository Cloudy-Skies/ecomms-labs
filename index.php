<?php
require 'Settings/core.php';
?>

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
    -- <?php
        // checks user login status and user role
        //code below runs if user is logged in
        if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true) {
            //checks if user is admin
            if ($_SESSION["user_role"] == 1) {
                echo "ADMIN";
                //Hidden html that runs on admin page
                //navbar with all links
                echo '
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">EC Labs</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <!-- register link >-->
                        <li class="nav-item active">
                            <a class="nav-link" href="Login/register.php">Register </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="Login/logout.php">Log Out </a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="View/cart.php">Cart </a>
                        </li> 
                        <li class="nav-item active">
                        <a class="nav-link" href="Admin/Brand.php">Brand </a>
                        </li>
                        <li class="nav-item active">
                        <a class="nav-link" href="Admin/category.php">Category </a>
                        </li>
                        <!->
        
                    </ul>
                </div>
            </nav>
                ';
                //html that runs for regular user
                //navbar with reduced links
            } else {
                echo "USER";
                echo '
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">EC Labs</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- register link >-->
                        <li class="nav-item active">
                            <a class="nav-link" href="Login/register.php">Register </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="Login/logout.php">Log Out </a>
                        </li>
                        <!-- <li class="nav-item active">
                        <a class="nav-link" href="View/cart.php">Cart </a>
                    </li> -->
                        <!->
        
                    </ul>
                </div>
            </nav>
                ';
            }
        }

        //code below runs if user is not logged in
        //redirect to login page
        else {
            header("location: Login/login.php");
        }
        ?> -


    <!-- bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>

</html>