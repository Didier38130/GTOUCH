<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/annonces.css">
  <title>Annonces</title>
</head>
<body>

  <img src="../model/data/img/annonces.jpg" alt="">

  <div class="container">
  <h1>Vous trouverez ci-dessous l'ensemble des demandes de retouches photos de nos clients : </h1>
  <?php if(isset($requetes)) {foreach ($requetes as $requete) { ?>
    <h3>Demande de retouche par <?= $requete->getLoginCLient() ?></h3>
    <a href="../controler/annonce.controler.php?idReq=<?= $requete->getIdRequete() ?>"><button type="button" name="button">Voir la demande</button></a>
    <br><br>
  <?php } } else if (count($requetes) == 0) { ?>
    <h3>Pas de requêtes à afficher</h3>
  <?php } ?>
  </div>

</body>
