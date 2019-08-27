<?php
require_once("../Model/categories.php");

$name = $_POST['name'];
$description = $_POST['description'];
$re = insert_category($name, $description);
if ($re['success']){ 
    // redirect to all_categories
    header("Location: all_categories.php");
} else {
    include("../View/error.php");
}
