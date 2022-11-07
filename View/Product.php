<?php
require '../Controllers/product_controller.php';
require '../Settings/core.php';

// function that redirects to login page if user is not admin
check_login();

//check permission return the value stored
//in the user_role session variable
if (check_permission() != 1) {
    header('Location: ../index.php');
}

//creating brands, categories and products
$brands = select_all_brands_controller();
$categories = select_all_products_ctr();
$products = select_all_categories_ctr();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Landing</title>
    <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous" 
    />
</head>

<body>
        <!-- Menu  -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.php">ECommerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./login/register.php">Register </a>
                </li>
                <?php
                 
                    // put this in a function in core.php (login_menu())
                    login_menu('../login/login.php', '#');
                    brand_menu_item('../admin/Brand.php');
                    category_menu_item('../admin/Category.php');
                    add_product_menu_item('./Product.php')
                ?>
                
                </ul>
            </div>
        </nav>
</body>

</html>