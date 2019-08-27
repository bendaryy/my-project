<?php

require_once("../Model/categories.php");

$id = $_GET['id'];

$re = select_category($id);

include("../View/edit_category_form.php");
