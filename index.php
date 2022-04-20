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
    <form action="process.php" method="post">

    <input type="text" placeholder="Voornaam">
    <input type="text" placeholder="*tussenvoegsel">
    <input type="text" placeholder="Achternaam">

    <input type="text" placeholder="email">
    <input type="text" placeholder="tel*">

    <select name="pets" id="pet-select">
    <option value="">--Please choose an option--</option>
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select>

       
        
        <input type="submit" class="form-control btn btn-primary"name="submit">
        
    </form>
    </div>
  </div>
</body>

</html>