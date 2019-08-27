<?php
require_once("../Model/products.php");
$re = select_all_products();

include("../View/all_products.php");
?>