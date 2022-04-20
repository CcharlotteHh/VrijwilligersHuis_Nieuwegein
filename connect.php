<?php

$servername = "10.52.1.65:8889";
$username = "root";
$password = "root";
$db = "vrijwilligershuis_nieuwegein"; //naam van de database

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
    echo "Connection Failed";
    die($conn->connect_error);
}
?>