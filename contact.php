<div class="col-4 col-s-12">
    <div class="contact">
        <h2 class="naam">Neem conttact met mij op</h2>
        <h2 class="light">via het onderstaande contactformulier</h2>
    <form action="mail.php" method="post">
        <label for="fname">Naam*:</label><br>
        <input type="text" id="fname" name="naam" placeholder="Je naam.." required>

        <label for="email">Email*:</label><br>
        <input type="text" id="email" name="email" placeholder="Je email" required><br>

        <label for="phone">Telefoonnummer</label><br>
        <input type="text" id="phone" name="telefoonnummer" placeholder="Je telefoonnummer"><br>

        <label for="onderwerp">Onderwerp*:</label><br>
        <input type="text" id="onderwerp" name="onderwerp" placeholder="Waar gaat het over" required><br>

        <label for="subject">Bericht</label><br>
        <textarea id="subject" name="bericht" placeholder="Schrijf iets.." style="height:200px"></textarea><br>

        <button type="submit" class="midden"><a class="buttonwerk midden"><span>Verstuur</span></a>
    </form>
    </div>
  </div>