<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/mesCommandes.css">
    <title>Mes commandes</title>
  </head>
  <body>
    <img src="../model/data/img/commandes.jpg" alt="">
    <div class="container">
      <h1>Mes commandes : </h1>
      <?php
      if ($commandesEnCours == NULL) {
        ?> <h2> • Vous n'avez aucune commandes en cours</h2> <?php
      }
      else {
        ?> <a href="../controler/mesCommandesEnCoursClient.controler.php"><h2> • Voir mes commandes en cours</h2></a> <?php
      }
      if ($commandesTerminees == NULL) {
        ?> <h2> • Vous n'avez aucune commande terminée</h2> <?php
      }
      else {
        ?> <a href="../controler/mesCommandesTermineesClient.controler.php"><h2> • Voir mes commandes terminées</h2></a> <?php
      }
      ?>
    </div>
  </body>
</html>
