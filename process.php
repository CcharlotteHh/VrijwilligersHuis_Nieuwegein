<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $email = $_POST['email'];
    $tel_nummer = $_POST['tel_nummer'];
    $message = $_POST['message'];

    $query = "insert into donatie (voornaam, tussenvoegsel, achternaam, email,tel,bericht)
    values('$voornaam', '$tussenvoegsel', '$achternaam', '$email', $tel_nummer, '$message')";
    $result = mysqli_query($conn,$query);
    header('location:index.php');
}
?>