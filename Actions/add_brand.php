<?php
    require'../Controllers/product_controller.php';
    require '../Settings/core.php';
    //case if admin is adding a brand
    if (check_permission()==1 && isset($_POST['addBrand'])) {
        $brand = $_POST['brand'];

        $out = add_product_brand_ctr($brand);

        if ($out) {
            header('Location: ../Admin/Brand.php');
        }else {
            #print error
            $_SESSION['brand_added']=false;
        }

        #no brand added to session variable
    }
?>