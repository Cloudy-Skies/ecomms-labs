<?php
//page uses methods from product controller and core pages
require '../Controllers/product_controller.php';
require '../Settings/core.php';

//check login status
check_login();
if (check_permission()!=1) {
    header('Location: ../index.php');
}

$category = select_all_categories_ctr();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brand Page</title>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please enter a new category name here.</p>
                    <form method="POST" action="../Actions/add_category.php">
                        <div class="form-group">
                            <label>Category</label>
                            <input name="category" class="form-control" placeholder="Enter category..." required>
                            <span class="invalid-feedback"></span>
                        </div>

                        <!-- //submit buttons -->
                        <input type="submit" class="btn btn-primary" value="Submit" name="addCategory" onclick="addNewBrand()">
                        <a href="../index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>

                    <table>
                        <thead>
                            <tr>
                                <th>Category ID</th>
                                <th>Category Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach($category as $row){
                                echo 
                                "
                                <tr>
                                    <td>{$row['cat_id']}</td>
                                    <td>{$row['cat_name']}</td>
                            
                                    <td>
                                        <a href='updateCategory.php?category_id={$row['cat_id']}'>
                                            <i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                                        </a>
                                    </td>
                                </tr>
                                ";
                            }

                            ?>

		
                        </tbody>
                    </table>
                    <a href="../index.php" class="btn btn-secondary ml-2">Go Back</a>

            


                </div>
            </div>
        </div>
    </div>
</body>
</html>