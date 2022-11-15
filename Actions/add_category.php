<?php
    require'../Controllers/product_controller.php';
    require '../Settings/core.php';
    //case if admin is adding a brand
    if (isset($_POST['addCategory'])) {
        $category = $_POST['category'];

        $out = add_product_category_ctr($category);
        //var_dump($out);
        if ($out) {
            header('Location: ../Admin/category.php');
           // echo "yes";
        }else {
            #print error
            //$_SESSION['brand_added']=false;
            //echo "no";
        }

        #no brand added to session variable
    }
?>