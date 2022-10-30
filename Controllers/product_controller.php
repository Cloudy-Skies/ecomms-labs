<?php
require('../Classes/product_class.php');

//The code below is organised in groups of add, select and edit.
//For the product brand, product category and product controller in that order

//add product brand
function add_product_brand_ctr($name)
{
    //instantiating a product class
    $add_product_brand = new ProductClass();
    return $add_product_brand->add_product_brand($name);
}

//add product category
function add_product_category_ctr($category)
{
    //instantiating a product class
    $add_product_cat = new ProductClass();
    return $add_product_cat->add_product_category($category);
}

//add product
function add_product_controller($category, $brand, $title, $price, $desc, $image, $keywords)
{
    $add_product_ctr = new ProductClass();
    return $add_product_ctr->add_product(
        $category,
        $brand,
        $title,
        $price,
        $desc,
        $image,
        $keywords
    );
}

//Selects:
//select all brands
function select_all_brands_controller()
{
    $product_instance = new ProductClass();
    return $product_instance->select_all_brands();
}

//select all categories
function select_all_categories_ctr()
{
    $product_instance=new ProductClass();
    return $product_instance->select_all_categories();
}

//select all products
function select_all_products_ctr()
{
    $product_instance=new ProductClass();
    return $product_instance->select_all_products();
}


//select one brand
function select_one_brand_ctr($id)
{
    $product_instance=new ProductClass();
    return $product_instance->select_one_brand($id);
}

//select one category
function select_one_category_ctr($id)
{
    $product_instance=new ProductClass();
    return $product_instance->select_one_category($id);
}

//select one product
function select_one_product_ctr($id)
{
    $product_instance=new ProductClass();
    return $product_instance->select_one_product($id);
}


//edit one brand
function edit_brand_ctr($id,$name)
{
    $product_instance=new ProductClass();
    return $product_instance->edit_brand($id,$name);
}

//edit one category
function edit_category_ctr($id,$name)
{
    $product_instance=new ProductClass();
    return $product_instance->edit_category($id,$name);
}

//edit one product
function edit_product_ctr($id,$category,$brand,$title,$price,$desc,$keywords)
{
    $product_instance=new ProductClass();
    return $product_instance->edit_product($id,$category,$brand,$title,$price,$desc,$keywords);
}
