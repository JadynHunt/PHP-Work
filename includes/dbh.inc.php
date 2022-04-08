<?php

$servername = "localhost:3306";
$dBUsername = "mahs_jhunt";
$dBPassword = "mustangs";
$dBName = "mahs_jhunt";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}