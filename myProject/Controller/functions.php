<?php

function getTextColorByBackgroundColor($bgc) {
    switch ($bgc) {
        case "red":
            $color = "yellow";
            break;
        case "green":
            $color = "white";
            break;
        case "blue":
            $color = "cyan";
            break;
        default:
            $color = "black";
    }
    return $color;
}

function vlidateDate($day, $month, $year) {
    $error = false;
    $today_year = 2017;
    if ($year > $today_year) { // Boolean Expression
        $error = true;
    } else {
        switch ($month) {
            case 1: case 3: case 5: case 7: case 8: case 10: case 12:
                if ($day > 31 || $day <= 0) {
                    $error = true;
                }
                break;
            case 4: case 6: case 9: case 11:
                if ($day > 30 || $day <= 0) {
                    $error = true;
                }
                break;
            case 2:
                if ($year % 4 == 0) {
                    if ($day > 29 || $day <= 0) {
                        $error = true;
                    }
                } else {
                    if ($day > 28 || $day <= 0) {
                        $error = true;
                    }
                }
                break;
            default:
                $error = true;
        }
    }
    return !$error;
}

function calculateAge($day_of_birth, $month_of_birth, $year_of_birth) {
    $today_year = date("Y");
    $today_month = date("m");
    $today_day = date("d");

    $valid = vlidateDate($day_of_birth, $month_of_birth, $year_of_birth);
    if (!$valid) {
        $age_years = "N/A";
        $age_months = "N/A";
        $age_days = "N/A";
    } else {
        if ($today_day < $day_of_birth) {
            $today_day += 30;
            $today_month--;
        }
        $age_days = $today_day - $day_of_birth;

        if ($today_month < $month_of_birth) {
            $today_month += 12;
            $today_year--;
        }
        $age_months = $today_month - $month_of_birth;

        $age_years = $today_year - $year_of_birth;
    }
    $age = array();
    $age['years'] = $age_years;
    $age['months'] = $age_months;
    $age['days'] = $age_days;
    return $age;
}

function getTitleByGender($gender) {
    if ($gender == "male") {
        return "Mr";
    } elseif ($gender == "female") {
        return "Miss";
    } else {
        return "Mr/Miss";
    }
}

function getSumAndCountOfNumber($number) {
    $digits_count = 0;
    $digits_sum = 0;
    $digits_array = array();
    do {
        $digit = $number % 10;
        $digits_array[] = $digit;
        $digits_sum += $digit;
        $number /= 10;
        $number = (int) $number;
        $digits_count++;
    } while ($number != 0);
    if ($digits_sum < 0) {
        $digits_sum *= -1;
    }

    $result = array();
    $result['count'] = $digits_count;
    $result['sum'] = $digits_sum;
    $result['digits'] = $digits_array;
    return $result;
}

function saveUploadedFile($file_info) {
    $result_array = array();
    if ($file_info['error'] == 0) {
        if ($file_info['size'] <= 2 * 1024 * 1024) {
            $typeArray = explode("/", $file_info['type']);
            if ($typeArray[0] == "image") {
                $locationFolder = "../images/";
                $newFilename = uniqid();
                $filenameArray = explode(".", $file_info['name']);
                $fileExtenstion = "." . end($filenameArray);
                $destination = $locationFolder . $newFilename . $fileExtenstion;
                move_uploaded_file($file_info['tmp_name'], $destination);
                $result_array['success'] = true;
                $result_array['file_path'] = $destination;
            } else {
                $result_array['success'] = false;
                $result_array['error'] = "Invalid Type";
            }
        } else {
            $result_array['success'] = false;
            $result_array['error'] = "Invalid Size";
        }
    } else {
        $result_array['success'] = false;
        $result_array['error'] = "Invlid File";
    }
    return $result_array;
}

?>