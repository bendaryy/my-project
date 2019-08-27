<?php
require_once("../Model/categories.php");

$id = $_GET['id'];
$re = delete_category($id);

if ($re['success']){
    // redirect to all_categories
    header("Location: all_categories.php");
} else {
    include("../View/error.php");
}