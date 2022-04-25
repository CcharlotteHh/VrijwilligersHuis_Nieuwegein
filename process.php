<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $tel_nummer = $_POST['tel_nummer'];    
    $message = $_POST['message'];
    $category_product = $_POST['category_product'];

    $query = "insert into donatie (voornaam, tussenvoegsel, achternaam, email,tel,bericht, category_id)
    values('$voornaam', '$tussenvoegsel', '$achternaam', '$email', '$tel_nummer', '$message', '$category_product')";
    $result = mysqli_query($conn,$query);
    
    header('location:index.php');

}
