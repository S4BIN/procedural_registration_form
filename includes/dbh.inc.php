<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPasswordName = "";
$dBName = "phpproject1";

$conn = mysqli_connect($serverName, $dBUserName, $dBPasswordName, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}