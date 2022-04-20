<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "webshop"; //naam van de database

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    echo "Connection Failed";
    die($conn->connect_error);
}
?>