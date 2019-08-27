<?php
//$year = date("Y");
//$month = date("m");
//$day = date("d");
//echo "current year is :" . $year;
//echo time();
$timestamp = mktime(0, 0, 0, 10, 10, 2000);
$date = date("l", $timestamp);
include("../View/date_test.php");
?>
