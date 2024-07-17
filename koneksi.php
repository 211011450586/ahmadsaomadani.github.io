<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "db_ahmadsaoma";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn){
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>