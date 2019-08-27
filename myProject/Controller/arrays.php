<?php
$x = 4;
$a = array();
$degrees = array(
    "Ahmed" => 12,
    45,
    "Aly" => 68,
);

$degrees[] = 50;
$degrees["Ahmed"] = 100;
unset($degrees["SALFDKJ;SALKJFD;LSAKJ"]);
include("../View/arrays.php");
?>
