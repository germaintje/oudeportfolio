<div class="col-4 col-s-12">
    <div class="contact">
        <h2 class="naam">Neem conttact met mij op</h2>
        <h2 class="light">via het onderstaande contactformulier</h2>

    <form action="mail.php" method="post">
        <label for="fname">Naam*:</label><br>
        <input type="text" id="fname" name="name" placeholder="Je naam.." required>

        <label for="email">Email*:</label><br>
        <input type="text" id="email" name="email" placeholder="Je email" required>

        <label for="phone">Telefoonnummer</label><br>
        <input type="text" id="phone" name="telefoonnummer" placeholder="Je telefoonnummer">

        <label for="onderwerp">Onderwerp*:</label><br>
        <input type="text" id="onderwerp" name="onderwerp" placeholder="Waar gaat het over" required>

        <label for="bericht">Bericht</label><br>
        <textarea id="bericht" name="bericht" placeholder="Schrijf iets.." style="height:200px"></textarea><br>

        <button id="button" name="submit" type="submit" class="midden"><a class="buttonwerk midden"><span>Verstuur</span></a>
    </form>
    </div>
    </div>
