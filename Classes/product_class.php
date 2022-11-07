<?php
    require ('../Settings/db_class.php');

    class ProductClass extends db_connection

    //
    {
        //methods
        //add product brand
        public function add_product_brand($brandName)
        {
            $sql = "INSERT into brands(brand_name) values('$brandName')";
            return $this->db_query($sql);
        }
        //add product category
        public function add_product_category($category)
        {
            $sql = "INSERT into categories(cat_name) values('$category')";
            return $this->db_query($sql);
        }
        //add new product
        public function add_product($category,$brand,$title,$price,$desc,$image,$keywords)
        {
            $sql = "INSERT into products
            (product_cat, product_brand ,product_title, 
            product_price, product_desc,product_image, 
            product_keywords ) values('$category','$brand','$title','$price','$desc','$image','$keywords')";
            return $this->db_query($sql);
        }

        
        //Selects:
        //select all brands
        function select_all_brands()
        {
            return $this->db_fetch_all("SELECT * from brands");
        }

        //select all categories
        function select_all_categories()
        {
            return $this->db_fetch_all("SELECT * from categories");
        }

        //select all products
        function select_all_products()
        {
            return $this->db_fetch_all("SELECT * from products");
        }


        //select one brand
        function select_one_brand($id)
        {
            return $this->db_fetch_one("SELECT * from brands where brand_id='$id'");
        }

        //select one category
        function select_one_category($id)
        {
            return $this->db_fetch_one("SELECT * from brands where cat_id='$id'");

        }

        //select one product
        function select_one_product($id)
        {
            return $this->db_fetch_one("SELECT * from brands where product_id='$id'");

        }
        
        //edit one brand
        function edit_brand($id,$name)
        {
            return $this->db_query("UPDATE brands set brand_name='$name' where brand_id='$id'");
        }

        //edit one category
        function edit_category($id,$name)
        {
            return $this->db_query("UPDATE categories set cat_name='$name' where cat_id='$id'");
        }

        //edit one product
        function edit_product($id,$category,$brand,$title,$price,$desc,$keywords)
        {
            return $this->db_query("UPDATE products set 
            product_cat='$category', product_title='$title',product_price='$price', 
            product_desc='$desc', product_keywords='$keywords' where cat_id='$id'");
        }



    }
    $new = new ProductClass();
?>