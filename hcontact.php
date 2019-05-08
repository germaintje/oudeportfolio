<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/includes.scss" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body class="backimg" background="css/images/6.png">
  <?php include 'header.php'; ?>
  
<div class="row">   
    <div class="col-12 col-s-12">
        <div class="hcontact">
            <h2 class="naam">Neem contact met mij op</h2>
            <h2 class="light">via het onderstaande contactformulier</h2>
            <p>Voor specifieke of andere vragen kunt u me altijd bellen / mailen.</p>
            <h4 class="mail">Email:</h4>
            <p class="mail">Menus2011@hotmail.com</p>
            <h4 class="mail">Telefoonnummer</h4>
            <p class="mail">06-37284354</p>

        <form action="mail.php" method="post">
            <label for="fname">Naam*:</label><br>
            <input type="text" id="fname" name="naam" placeholder="Je naam.." required><br>

            <label for="email">Email*:</label><br>
            <input type="text" id="email" name="email" placeholder="Je email" required><br>

            <label for="phone">Telefoonnummer</label><br>
            <input type="text" id="phone" name="telefoonnummer" placeholder="Je telefoonnummer"><br>

            <label for="onderwerp">Onderwerp*:</label><br>
            <input type="text" id="onderwerp" name="onderwerp" placeholder="Waar gaat het over" required><br>

            <label for="subject">Bericht</label><br>
            <textarea id="subject" name="bericht" placeholder="Schrijf iets.." style="height:200px"></textarea><br>

            <a type="submit" class="buttonwerk midden"><span>Verstuur</span></a>
        </form>
        </div>
     </div>
</div>

  </body>
</html>


