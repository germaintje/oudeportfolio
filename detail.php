<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail pagina</title>
  <link rel="stylesheet" href="css/includes.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'header.php'; ?>
  
<div class="row">
<?php include 'connectDatabase.php'; ?>
    
    <?php
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM detailpagina where id = " . $id;
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $naam =  $row['naam'];
        $datum = $row['datum'];
        $images = $row['image'];
        $image2 = $row['image2'];
        $beschrijving = $row['beschrijving'];
        $talen = $row['talen'];
        $teamalleen = $row['team/alleen'];
        $linkjes = $row['linkjes'];
    }
    
    ?>
    
    <div class="row">
    
        <div class="col-6 col-s-12">
            <div class="werksliderdetail">
                    <h2><?php echo $naam; ?></h2>
                    <?php echo "<img style='width: auto' class='mySlides' src=" . "css/images/$images " . ">";?>
            </div>
        </div>
    
        <div class="col-6 col-s-12">
                <div class="specs">
                    <div class="specs-01">
                        <h3>Beschrijving</h3>
                        <p><?php echo $beschrijving; ?></p>

                        <h4>Specificaties:</h4>
                        <p><b>Project:</b>  <?php echo $naam?></p>
                        <p><b>Datum:</b>  <?php echo $datum?></p>
                        <p><b>Programmeertalen:</b>  <?php echo $talen?></p>
                        <p><b>In teamverband of alleen:</b>  <?php echo $teamalleen?></p>
                        <p><b>Github:</b>  <?php echo $linkjes?></p>
                    </div>
                </div>
        </div>
    
    <?php include 'footer.php'; ?>
</div>

  </body>
</html>



<script type="text/javascript" src="js/slide.js"></script>