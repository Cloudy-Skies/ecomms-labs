<?php
    require'../Controllers/product_controller.php';
    require '../Settings/core.php';
    //case if admin is adding a brand
    if (isset($_POST['addBrand'])) {
        $brand = $_POST['brand'];

        $out = add_product_brand_ctr($brand);
        //var_dump($out);
        if ($out) {
            header('Location: ../Admin/Brand.php');
           // echo "yes";
        }else {
            #print error
            //$_SESSION['brand_added']=false;
            //echo "no";
        }

        #no brand added to session variable
    }
?>