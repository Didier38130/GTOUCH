<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/modifEtatCommande.css">
    <title>modifEtatCommande</title>
  </head>
  <body>
    <img src="../model/data/img/projets.jpg" alt="">
    <div class="container">
      <h2>Selectionner l'état de la commande : </h2>
      <form action="../controler/modifEtatCommande.controler.php" method="post">
        <div class="checkbox">
        <div class="box1">
          <input type="radio"  name="etat" value="zero" required>
          <p>  Je n'ai pas commencé</p>
        </div>
        <div class="box2">
          <input type="radio" name="etat" value="encours" required>
          <p>  Projet en cours</p>
        </div>
        <div class="box3">
          <input type="radio" name="etat" value="terminee" required>
          <p>  Projet terminé</p>
        </div>
        </div>
        <input type="submit" name="Submit1" value="Valider" class="valider">
      </form>
    </div>
  </body>
</html>
