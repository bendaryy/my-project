<?php

function connect() {
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "store_1707";
    $connection = mysqli_connect($host, $user, $password, $database);
    return $connection;
}
