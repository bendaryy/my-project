<?php
/* Functions Definition - START */
require_once("functions.php");
/* Functions Definition - END */
/* Extracting Data from Request - START */
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$interests = (isset($_POST['interests'])) ? $_POST['interests'] : array();
$year_of_birth = $_POST['year_of_birth'];
$month_of_birth = $_POST['month_of_birth'];
$day_of_birth = $_POST['day_of_birth'];
$gender = (isset($_POST['gender'])) ? $_POST['gender'] : "N/A";
$bg_color = (isset($_POST['color1'])) ? $_POST['color1'] : "N/A";
$bg_color2 = (isset($_POST['color2'])) ? $_POST['color2'] : "N/A";
$lucky_number = $_POST['lucky_number'];
$file_info = $_FILES['profile_picture'];
print_r($file_info);
/* Extracting Data from Request - END */
/* Business Logic - START */
$full_name = $first_name;
$full_name .= " ";
$full_name .= $last_name;

$text_color = getTextColorByBackgroundColor($bg_color);
$text_color2 = getTextColorByBackgroundColor($bg_color2);
$ageArray = calculateAge($day_of_birth, $month_of_birth, $year_of_birth);
$title = getTitleByGender($gender);
$lucky_number_array = getSumAndCountOfNumber($lucky_number);
$uploadResult = saveUploadedFile($file_info);
/* Business Logic - END */

/* Viewing - START */
include("../View/index.php");
/* Viewing - END */
?>