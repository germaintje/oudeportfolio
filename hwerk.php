<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Werk</title>
    <link rel="stylesheet" href="css/includes.scss" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'header.php'; ?>
  
<div class="row">

      <div class="col-4 col-s-9">
            <div class="werktekst">
              <h2>Mijn gemaakte opdrachten</h2>
              <p>In mijn opleidng als applicatie mediadeveloper heb ik verschillende soorten werk moeten maken. Hieronder heb ik ze opgesomt en als je er op klikt kan je het beter bekijken. Ik heb ook een link naar mijn github geplaatst zodat je kan kijken naar de code.<br><br>Hierin zitten ook mijn eigen werk en werk van stages die ik heb gelopen. Ze zijn opgedeeld in gronoligische volgorde.
              </p>
              <a class="github" href="https://github.com/germaintje?tab=repositories" target="_blank">https://github.com/germaintje?tab=repositories</a>
            </div>
      </div>

      <div class="col-8 col-s-9">
            <div class="werkslider">
              <img class="mySlides" src="css/images/exam.png">
              <img class="mySlides" src="css/images/ictblog.png">
              <img class="mySlides" src="css/images/stardunkl1.png">
              <img class="mySlides" src="css/images/stardunkl2.png">
              <img class="mySlides" src="css/images/bonnetje.png">
              <img class="mySlides" src="css/images/movieDB.png">
              <img class="mySlides" src="css/images/webshop.png">
              <img class="mySlides" src="css/images/opdracht005.png">
            </div>
      </div>

      <div class="col-12 col-s-12">
          <div class="col-12 col-s-12" id="myBtnContainer">
            <button class="btn Xactive" onclick="filterSelection('all')"> Alles</button>
            <button class="btn" onclick="filterSelection('projecten')"> Projecten</button>
            <button class="btn" onclick="filterSelection('html/css')"> HTML/CSS</button>
            <button class="btn" onclick="filterSelection('php')"> PhP</button>
            <button class="btn" onclick="filterSelection('mysql')"> Mysql</button>
          </div>

          <div class="col-4 col-s-6 filterDiv projecten html/css">
            <div class="werk">
              <img class="werkimg" src="css/images/exam.png" alt="Project Exam"> 
              <a href="detail.php?id=1"><h3 class="alt">Project exam</h3></a>
              <p class="left">Bij het einde van jaar 1 hebben we een opdracht moeten maken genaamd Project Exam. De opdracht was een foto na te maken aan de hand van een paar plaatjes. Hij moest responsive zijn en daar werd je voornaamd op beoordeeld je html, en css kennis.</p>
              <a class="buttonwerk" href="detail.php?id=1"><span>Details</span></a>
              </div> 
          </div>

          <div class="col-4 col-s-6 filterDiv html/css">
            <div class="werk">
              <img class="werkimg" src="css/images/ictblog.png" alt="ICT Blog"> 
              <a href="detail.php?id=2"><h3 class="alt">ICT Blog</h3></a>
              <p class="left">Aan het begin van jaar 1 hebben wij geoefent met HTML en CSS elementen. We moesten aan de hand van wat bestanden dit namaken genaamt ICT Blog. Er werd vooral gefocust op...</p>
              <a class="buttonwerk" href="detail.php?id=2"><span>Details</span></a>
            </div>
          </div>

          <div class="col-4 col-s-6 filterDiv php mysql">
              <div class="werk">
                <img class="werkimg" src="css/images/stardunkl1.png" alt="Stardunkl1"> 
                <a href="detail.php?id=3"><h3 class="alt">Stardunk level1</h3></a>
                <p class="left">In de helft van jaar 2 hebben wij ons gefocust op de Stardunk levels. Deze opdrachten zijn gemaakt met PHP en MySQL. Je moest een database met gegevens opstellen en aa de hand van PHP code het op het beeld laten zien...</p>
                <a class="buttonwerk" href="detail.php?id=3"><span>Details</span></a>
              </div>
          </div>

          <div class="col-4 col-s-6 filterDiv php mysql">
            <div class="werk">
              <img class="werkimg" src="css/images/stardunkl2.png" alt="Stardunkl2"> 
              <a href="detail.php?id=4"><h3 class="alt">Stardunk level2</h3></a>
              <p class="left">In de helft van jaar 2 hebben wij ons gefocust op de Stardunk levels. Deze opdrachten zijn gemaakt met PHP en MySQL. Je moest een database met gegevens opstellen en aa de hand van PHP code het op het beeld laten zien...</p>
              <a class="buttonwerk" href="detail.php?id=4"><span>Details</span></a>
              </div> 
          </div>

          <div class="col-4 col-s-6 filterDiv php mysql">
            <div class="werk">
              <img class="werkimgklein" src="css/images/bonnetje.png" alt="Bonnetje"> 
              <a href="detail.php?id=5"><h3 class="alt">Bonnetje</h3></a>
              <p class="left">Aan het begin van leerjaar 2 hebben we in het kort als een soort herhaling de opdracht bonnetje gedaan. hierbij gingen we aan de hand van een database kijken hoe we het bonnetje zo goed konden namaken...</p>
              <a class="buttonwerk" href="detail.php?id=5"><span>Details</span></a>
            </div>
          </div>

          <div class="col-4 col-s-6 filterDiv php mysql">
              <div class="werk">
                <img class="werkimgklein" src="css/images/movieDB.png" alt="MovieDB"> 
                <a href="detail.php?id=6"><h3 class="alt">movieDB</h3></a>
                <p class="left">In leerjaar 2 hebben wij bij de opdrachten movieDB ons vooral gefocust met het opzetten van queries. We hebben eerst een database opgezet met verschillende relatie's daartussen... </p>
                <a class="buttonwerk" href="detail.php?id=6"><span>Details</span></a>
              </div>
          </div>

          <div class="col-4 col-s-6 filterDiv projecten html/css">
              <div class="werk">
                <img class="werkimg" src="css/images/webshop.png" alt="Webshop"> 
                <a href="detail.php?id=7"><h3 class="alt">Webshop</h3></a>
                <p class="left">In leerjaar 1 hebben wij voor projectmanagement een webshop moeten maken. Het doel was om via html en css een computerzaak webshop te maken. Het ging vooral om de layout en de styles die je eraan mee gaf...</p>
                <a class="buttonwerk" href="detail.php?id=7"><span>Details</span></a>
              </div>
          </div>

          <div class="col-4 col-s-6 filterDiv html/css">
              <div class="werk">
                <img class="werkimg" src="css/images/opdracht005.png" alt="opdracht005"> 
                <a href="detail.php?id=8"><h3 class="alt">Opdracht005</h3></a>
                <p class="left">In leerjaar 1 hebben wij voor het vak programmeren een opdracht gekregen genaamd opdracht005. In deze opdracht moesten wij aan de hand van wat plaatjes alles goed in elkaar zetten. Je moest vooral css gebruiken om alle plaatjes goed onder elkaar te kunnen zetten.</p>
                <a class="buttonwerk" href="detail.php?id=8"><span>Details</span></a>
              </div>
          </div>

        </div>
        <?php include 'footer.php'; ?>
</div>

  </body>
</html>

<script type="text/javascript" src="js/slide.js"></script>
<script type="text/javascript" src="js/filter.js"></script>
