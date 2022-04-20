<?php

$servername = "localhost";
$username = "u210578_Admin1";
$password = "Admin1";
$db = "u210578_vhndb"; //naam van de database

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    echo "Connection Failed";
    die($conn->connect_error);
}
?>