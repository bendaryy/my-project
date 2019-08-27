<?php
    require_once('../Model/categories.php');
    require_once('../Model/brands.php');
    
    $categories_re = select_all_categories();
    $brands_re = select_all_brands();
    
    include("../View/new_product_form.php");
?>