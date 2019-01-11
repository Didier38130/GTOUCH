<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/mesCommandes.css">
    <title>Mes projets</title>
  </head>
  <body>
    <img src="../model/data/img/projets.jpg" alt="">
    <div class="container">
      <h1>Mes projets : </h1>
      <?php
      if ($commandesEnCours == NULL) {
        ?> <h2> • Vous n'avez aucun projet en cours</h2> <?php
      }
      else {
        ?> <a href="../controler/mesProjetsEnCours.controler.php"><h2> • Voir mes projets en cours</h2></a> <?php
      }
      if ($commandesTerminees == NULL) {
        ?> <h2> • Vous n'avez terminé aucun projet</h2> <?php
      }
      else {
        ?> <a href="../controler/mesProjetsTerminees.controler.php"><h2> • Voir mes projets terminés</h2></a> <?php
      }
      ?>
    </div>
  </body>
</html>
