<?php
require_once("../Model/categories.php");
$re = select_all_categories();

include("../View/all_categories.php");
?>