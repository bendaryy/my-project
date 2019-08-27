<?php
require_once("../Model/categories.php");

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$re = update_category($id, $name, $description);
if ($re['success']){
    header("Location: all_categories.php");
} else {
    include('../View/error.php');
}

