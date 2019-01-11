<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/mesCommandesEnCours.css">
    <title>Mes projets en cours</title>
  </head>
  <body>
    <img src="../model/data/img/projets.jpg" alt="">
    <h1>Mes projets en cours : </h1>
    <div class="container">
      <?php foreach ($commandesEnCours as $key => $value) { ?>
        <h2>Requête datée du <?= $value->getDateRequete() ?></h2>
        <div class="commandes">
          <?php $image = $value->getImage();?>
          <?php $listeId = $value->getListeId(); $tableauId = explode('&', $listeId); ?>
          <div class="image">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" class="img"/>'; ?>
            <a href="../controler/modifEtatCommande.controler.php?idRequete=<?= $value->getIdRequete() ?>"><button class="maj" type="button" name="button">Mettre à jours etat commande</button></a>
            <a href="../controler/message.controler.php?id=<?= $value->getClient() ?>"><button class="message" type="button" name="button">Envoyer un message a <?= $value->getLoginClient() ?></button></a>
          </div>
          <div class="description">
            <?php
            if(isset($tableauId)) { foreach ($tableauId as $id) { $service = $DAO->getServiceFromId($id);?>
              <h2>Retouche : <?= $service[0]->getNomService() ?></h2>
              <h3><?= $service[0]->getDescripService() ?></h3>
              <p>Le graphiste recevra un montant de : <?= $service[0]->getPrixService() ?>€ pour cette retouche, conformément à la grille tarifaire.</p>
            <?php } } ?>

            <?php if ($value->getDescripRequete() != '') { ?>
              <h3>Demande du client : </h3>
              <p><?=$value->getDescripRequete()?></p>
            <?php } ?>
            <h3>Etat de la commande</h3>
            <?php if ($value->getEtatRequete() == 'zero') { ?>
              <p>Projet non commencé</p>
            <?php } else if ($value->getEtatRequete() == 'encours') { ?>
              <p>Projet en cours</p>
            <?php } else { ?>
              <p>Projet terminé</p> <<?php
            }
            ?>
          </div>
        </div>
        <?php
      } ?>

    </div>
  </body>
</html>
