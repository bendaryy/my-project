<?php

require_once("../Model/products.php");
require_once("functions.php");

$category_id = $_POST['category_id'];
$brand_id = $_POST['brand_id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$description = $_POST['description'];
$expiry_date = $_POST['expiry_date'];

$picutre_info = $_FILES['picture'];
if ($picutre_info['error'] == 4) {
    $picutre_path = null;
} else {
    $fileResult = saveUploadedFile($picutre_info);
    $picture_path = $fileResult['file_path'];
}

if ($fileResult['success']) {
    $re = insert_product($category_id, $brand_id, $name, $quantity, $description, $picture_path, $expiry_date);
    if ($re['success']) {
        header("Location: all_products.php");
    } else {
        include('../View/error.php');
    }
} else {
    $re['error_number'] = 0;
    $re['error_message'] = $fileResult['error'];
    include("../View/error.php");
}