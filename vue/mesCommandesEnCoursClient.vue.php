<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/mesCommandesEnCours.css">
    <title>Mes commandes</title>
  </head>
  <body>
    <img src="../model/data/img/commandes.jpg" alt="">
    <h1>Mes commandes en cours : </h1>
    <div class="container">
      <?php foreach ($commandesEnCours as $key => $value) { ?>
        <h2>Requête datée du <?= $value->getDateRequete() ?></h2>
        <div class="commandes">
          <?php $image = $value->getImage();?>
          <?php $listeId = $value->getListeId(); $tableauId = explode('&', $listeId); ?>
          <div class="image">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" class="img"/>'; ?>
            <?php
            if ($value->getIdGraphiste() != NULL) {
              ?> <a href="../controler/message.controler.php?id=<?= $value->getIdGraphiste() ?>"><button class="message" type="button" name="button">Envoyer un message au graphiste</button></a> <?php
            }
            else {
              ?> <h2>Aucun graphiste n'est en charge de votre commande pour l'instant</h2> <?php
            }
            ?>
          </div>
          <div class="description">
            <?php
            if(isset($tableauId)) { foreach ($tableauId as $id) { $service = $DAO->getServiceFromId($id);?>
              <h2>Retouche : <?= $service[0]->getNomService() ?></h2>
              <h3><?= $service[0]->getDescripService() ?></h3>
              <p>Le graphiste recevra un montant de : <?= $service[0]->getPrixService() ?>€ pour cette retouche, conformément à la grille tarifaire.</p>
            <?php } } ?>

            <?php if ($value->getDescripRequete() != '') { ?>
              <h3>Ma demande : </h3>
              <p><?=$value->getDescripRequete()?></p>
            <?php } ?>
              <h3>Etat de ma commande : </h3>
            <?php if ($value->getEtatRequete() == 'zero') { ?>
              <p>Votre commande n'a pas encore été commencée</p>
            <?php } else if ($value->getEtatRequete() == 'encours') { ?>
              <p>Votre commande est prise en charge en ce moment par le graphiste</p>
            <?php } else { ?>
              <p>Votre commande est terminée</p> <<?php
            }
            ?>

          </div>
        </div>
        <?php
      } ?>

    </div>
  </body>
</html>
