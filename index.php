<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <div class="split-screen">
    <div class="left">
      <section class="copy">
        <h1>VrijwilligersHuis Nieuwegein</h1>
        <p>Vul ons formulier in en laat ons weten hoe je ons kunt helpen!</p>
      </section>
    </div>
    <div class="right">
      <form action="">
        <section class="copy">
          <h2>Formulier</h2>

        </section>
        <div class="input-container name">
          <label for="fname">Volledige naam</label>
          <div class="name-input-container">
          <input class="name-input" id="fname" name="voornaam" type="text" placeholder="Voornaam" required>
          <input class="tv-input"  id="fname" name="tussenvoegsel" type="text" placeholder="tvs">
          <input class="name-input" id="fname" name="achternaam" type="text" placeholder="Achterrnaam" required>
          </div>
        </div>
        <div class="input-container email">
          <label for="email">E-mail</label>
          <input id="email" name="email" type="text" placeholder="E-mail" required>
        </div>
        <div class="input-container phone">
          <label for="tel">Telefoonnummer</label>
          <input id="tel" name="tel_nummer" type="text" placeholder="Telefoonnummer">
        </div>
        <div class="input-container">
          <label for="message">Vertel ons wat over hoe je wil helpen</label>
          <input name="message" type="text">
        </div>
        <div class="input-container">
          <label for="category">Selecteer category</label>
          <select name="category-product"required>
            <option value="">Selecteer een category</option>
            <option value="dog">Dog</option>
            <option value="cat">Cat</option>
            <option value="hamster">Hamster</option>
            <option value="parrot">Parrot</option>
            <option value="spider">Spider</option>
            <option value="goldfish">Goldfish</option>
            </select>
            </div>
            <button type="submit" class="signup-btn" name="submit">Verstuur</button>
        
      </form>
    </div>
  </div>
  </div>
  </div>
</body>

</html>
<?php

?>