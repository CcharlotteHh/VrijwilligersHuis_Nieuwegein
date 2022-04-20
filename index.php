<?php include ('../functions/connect.php');
    if(isset($_POST['submit'])){

        $voornaam = $_POST['voornaam'];
        $tussenvoegsel = $_POST['tussenvoegsel'];
        $achternaam = $_POST['achternaam'];
        $email = $_POST['email'];
        $tel = $_POST['tel_nummer'];
        $category = $_POST['category-product'];

        $sql = "INSERT INTO `product_meldingen`(`voornaam`, `tussenvoegsel`, `achternaam`, `email`, `tel`, `category`) VALUES ('$voornaam','$tussenvoegsel','$achternaam','$email','$tel', $category);";

    if ($conn->query($sql) === TRUE){
        echo "Product has been added"; //message als het is toegevoegd
    } else{
        echo "Database Query error"; //verbinding mislukt
    }

    $conn->close();

} else { 
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/input.css">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <section>
      <div class="header-container">
        <img src="assets/img/logo.png" alt="logo">
        <h1 class="text-3xl">VrijwilligersHuis Nieuwegein</h1>
      </div>
      <div class="info-container">
        <h2 class="text-xl">Our misson</h2>
      </div>
    </section>
    <div class="form-container flex">
    <form action="" method="post">

    <input type="text" name="voornaam" placeholder="Voornaam">
    <input type="text" name="tussenvoegsel" placeholder="*tussenvoegsel">
    <input type="text" name="achternaam" placeholder="Achternaam">

    <input type="text" name="email" placeholder="email">
    <input type="text" name="tel_nummer" placeholder="tel*">

    <select name="category-product" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select>

       
        
        <input type="submit" class="form-control btn btn-primary" name="submit">
        
    </form>
    </div>
  </div>
</body>
</html>
<?php
}
?>