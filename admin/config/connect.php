<?php
// $servername = "localhost";
// $admin_user = "root";
// $admin_pass = "";
// $my_db = "subins";
// $port = "3307";


$servername = "103.97.125.254";
$admin_user = "zjswvdix_thaolaptrinh";
$admin_pass = "160723Thao@";
$my_db = "zjswvdix_subins";
$port = "3306";

// Create connection
$conn = new mysqli($servername, $admin_user, $admin_pass, $my_db, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
