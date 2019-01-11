<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/mesCommandesTerminees.css">
    <title>Mes commandes</title>
  </head>
  <body>
    <img src="../model/data/img/commandes.jpg" alt="">
    <h1>Mes commandes terminées : </h1>
    <div class="container">
      <?php foreach ($commandesTerminees as $key => $value) { ?>
        <h2>Requête datée du <?= $value->getDateRequete() ?></h2>
        <div class="commandes">
          <?php $image = $value->getImage();?>
          <?php $listeId = $value->getListeId(); $tableauId = explode('&', $listeId); ?>
          <div class="image">
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" class="img"/>'; ?>
            <a href="../controler/message.controler.php?id=<?= $value->getClient() ?>"><button class="message" type="button" name="button">Voir les messages avec <?= $value->getLoginClient() ?></button></a>
          </div>
          <div class="description">
            <?php
            if(isset($tableauId)) { foreach ($tableauId as $id) { $service = $DAO->getServiceFromId($id);?>
              <h2>Retouche : <?= $service[0]->getNomService() ?></h2>
              <h3><?= $service[0]->getDescripService() ?></h3>
              <p>Le graphiste a reçu un montant de : <?= $service[0]->getPrixService() ?>€ pour cette retouche, conformément à la grille tarifaire.</p>
            <?php } } ?>

            <?php if ($value->getDescripRequete() != '') { ?>
              <h3>Demande du client : </h3>
              <p><?=$value->getDescripRequete()?></p>
            <?php } ?>
          </div>
        </div>
        <?php
      } ?>

    </div>
  </body>
</html>
