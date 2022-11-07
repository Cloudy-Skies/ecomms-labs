<?php
require '../Controllers/product_controller.php';
require '../Settings/core.php';

// https://www.allphptricks.com/upload-file-using-php-save-directory/0

if (isset($_POST['addProduct'])) {

    // Post the form details
    $title = $_POST['title'];
    $brand_id = $_POST['brand'];
    $cat_id = $_POST['category'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $keyword = $_POST['keyword'];

    // Add the image to the product directory 
    $target_directory = '../images/product/';
    $file = $_FILES['image']['name'];
    $path = pathinfo($file);
    $filename = $path['filename'];
    $extension = $path['extension'];

    $temp_name = $_FILES['image']['tmp_name'];
    $path_filename_ext = $target_directory . $filename . "." . $extension;

    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        $_SESSION['image_exists'] = 'Sorry, this image already exists';

        echo "Sorry, file already exists.";
    } else {
        move_uploaded_file($temp_name, $path_filename_ext);
        echo "Congratulations! File Uploaded Successfully.";
        echo '<br>', $cat_id, '<br>', $brand_id, '<br>',  $title, '<br>', $price, '<br>',  $desc, '<br>', $file, '<br>', $keyword;
        $result = add_product_controller($cat_id, $brand_id, $title, $price, $desc, $file, $keyword);
        if ($result) {
            header('Location: ../view/Product.php');
        } else {
            'Could not add product ';
        }
    }


}
