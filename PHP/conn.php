<?php

$host = "localhost";
$user = "hana";
$pass = "hana1810#";
$base = "mahasiswa";


$conn = mysqli_connect($host, $user, $pass, $base);

if (mysqli_connect_errno()) {
    die("Failed To Connect");
}