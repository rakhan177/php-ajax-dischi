<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Php Dischi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
      require_once __DIR__ . '/database/database.php';
    ?>
    <div class="container">
      <div class="header">
        <div class="header-input">
          <div>
            <input type="text" name="" value="">
          </div>
          <div>
            <i class="fas fa-search"></i>
          </div>
        </div>
      </div>
      <div class="main">

        <?php
        foreach($dischi as $disco) {
        ?>

        <div class="main-scheda">
          <img src="<?php echo $dischi['image']; ?>">
          <div class="main-scheda-text">
            <div class="main-scheda-text-album"><?php echo $disco['titolo']; ?></div>
            <div class="main-scheda-text-artista"><?php echo $disco['autore']; ?></div>
            <div class="main-scheda-text-genere"><?php echo $disco['genere']; ?></div>
            <div class="main-scheda-text-anno"><?php echo $disco['anno']; ?></div>
          </div>
        </div>

        <?php
          }
        ?>

      </div>
    </div>
  </body>
</html>
