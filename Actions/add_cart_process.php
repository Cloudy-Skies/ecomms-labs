<?php
require ("../Controllers/cart_controller.php");

    //grab get data from links
    $pid = $_GET['pid'];
    $ipadd = $_GET['ipadd'];
    $cid = $_GET['cid'];
    $qty = $_GET['qty'];


        //check for log in
    if (empty($cid)){
        //check for duplicates

        $isDuplicate = check_duplicate_null_ctr($pid, $ipadd);
        if ($isDuplicate){
        ?>
        <script type="text/javascript">
        alert("Product is already in cart. Consider increasing qty in your cart");
        window.location.href = "../index.php";
        </script>
        <?php
        }else{
            $insertIntoCart = insert_into_cart_null_ctr($pid, $ipadd, $qty);
            if ($insertIntoCart){
                header("location: ../index.php");
            }else{
                echo "something went wrong";
            }
        }
    }else{
        $isDuplicate = check_duplicate_ctr($pid, $cid);
        if ($isDuplicate){
            ?>
            <script type="text/javascript">
            alert("Product is already in cart. Consider increasing qty in your cart");
            window.location.href = "../index.php";
            </script>
            <?php
        }else{
            $insertIntoCart = insert_into_cart_ctr($pid, $ipadd, $cid, $qty);

            if ($insertIntoCart){
                header("location: ../index.php");
            }else{
                echo "something went wrong";
            }
         }
    }

?>

?>