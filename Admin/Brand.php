<?php
//page uses methods from product controller and core pages
require '../Controllers/product_controller.php';
require '../Settings/core.php';

//check login status
check_login();
if (check_permission()!=1) {
    header('Location: ../index.php');
}

$brands = select_all_brands_controller()

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
                    <p>Please enter a new brand name here.</p>
                    <form method="POST" action="../Actions/add_brand.php">
                        <div class="form-group">
                            <label>Brand</label>
                            <input name="brand" class="form-control" placeholder="Enter brand..." required></textarea>
                            <span class="invalid-feedback"></span>
                        </div>

                        <!-- //submit buttons -->
                        <input type="submit" class="btn btn-primary" value="Submit" name="addBrand" onclick="addNewBrand()">
                        <a href="../index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>

                    <table>
                        <thead>
                            <tr>
                                <th>Brand ID</th>
                                <th>Brand Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach($brands as $brand){
                                echo 
                                "
                                <tr>
                                    <td>{$brand['brand_id']}</td>
                                    <td>{$brand['brand_name']}</td>
                            
                                    <td>
                                        <a href='updateBrand.php?brand_id={$brand['brand_id']}'>
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

                    <script>
                        function addNewBrand() 
                        {
                        $.post("../actions/add_brand.php", {
                                addBrand: "1", 
                                brand: document.getElementById("brand").value, 
                                }, function(data){
                                    console.log('added!')
                                    alert("Product has been added!");
                                    $('.table').load("Brand.php .table")
                                    //location.reload();
                                });
                        }
                    </script>


                </div>
            </div>
        </div>
    </div>
</body>
</html>