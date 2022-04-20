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
    <section class="home_container">
      <header>
        <figure class="logo_container">
          <img src="assets/img/logo.png" alt="">
        </figure>

        <h1 class="logo-name">VrijwilligersHuis <br> Nieuwegein</h1>
      </header>
      <div class="info-container">
        <h2 class="">Our misson</h2>
        <p>
       Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam quia error excepturi beatae ab, cum nesciunt animi debitis reiciendis placeat? Molestiae illo omnis totam eveniet accusantium, necessitatibus maiores ut? Et quis deserunt beatae voluptatum ducimus odit ipsa quae unde quidem recusandae nesciunt fugit quasi itaque, eius tenetur saepe odio rerum dolorum sit, id accusamus vel quos quisquam! Praesentium, dicta earum!
        </p>
      </div>
      <div class="contact-container">
        contact
      </div>
    </section>
    <div class="form-container">
      <!--form-->
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
        <input type="submit" name="submit">

      </form>
    </div>
  </div>
</body>

</html>