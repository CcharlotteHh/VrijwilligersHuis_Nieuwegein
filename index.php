<?php
include 'connect.php';
include 'header.php';
include 'process.php';
?>

<body>
  <div class="split-screen">
    <div class="left">
      <section class="copy">
        <h1>VrijwilligersHuis Nieuwegein</h1>
        <p>Vul ons formulier in en laat ons weten hoe je ons kunt helpen!</p>
      </section>
    </div>
    <div class="right">
      <form action="process.php" method="post">
        <section class="copy">
          <h2>Formulier</h2>

        </section>
        <div class="input-container name">
          <label for="fname">Volledige naam</label>
          <div class="name-input-container">
            <input class="name-input" name="voornaam" type="text" placeholder="Voornaam*" required>
            <input class="tv-input" name="tussenvoegsel" type="text" placeholder="tvs">
            <input class="name-input" name="achternaam" type="text" placeholder="Achternaam*" required>
          </div>
        </div>
        <div class="input-container email">
          <label for="email">E-mail</label>
          <input name="email" type="text" placeholder="E-mail*" required>
        </div>
        <div class="input-container phone">
          <label for="tel">Telefoonnummer</label>
          <input name="tel_nummer" type="text" placeholder="Telefoonnummer">
        </div>
        <div class="input-container">
          <label for="message">Vertel ons wat over hoe je wil helpen</label>
          <input name="message" type="text">
        </div>
        <div class="input-container">
          <label for="category">Selecteer category</label>
          <select name="category-product" required>
            <?php
            $sql = "select category_id, naam from categorie";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <option value="<?php echo $row['category_id'] ?>"><?php echo $row['naam'] ?></option>


            <?php
            } ?>
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