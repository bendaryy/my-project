<?php
include("functions.php");
// 1)   Extract Data
$year = $_GET['year'];
$month = $_GET['month'];
$day_of_birth = $_GET['day'];

// 2)   Processing
$valid = validateDate($day_of_birth, $month, $year);

include("../View/date_validation.php");
?>
