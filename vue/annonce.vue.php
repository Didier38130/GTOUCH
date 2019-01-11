<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/annonce.css">
  <title>Annonce</title>
</head>
<body>

  <h2>Requête datée du <?= $requete->getDateRequete() ?></h2>

  <div class="container">

  <?php if(isset($requete)) { ?>
    <?php $image = $requete->getImage();?>
    <?php $listeId = $requete->getListeId(); $tableauId = explode('&', $listeId); ?>
    <div class="image">
      <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image).'" class="img"/>'; ?>
    </div>
    <div class="description">
      <?php if(isset($tableauId)) { foreach ($tableauId as $id) { $service = $DAO->getServiceFromId($id);?>
        <h2>Retouche : <?= $service->getNomService() ?></h2>
        <h3><?= $service->getDescripService() ?></h3>
        <p>Le graphiste recevra un montant de : <?= $service->getPrixService() ?>€ pour cette retouche, conformément à la grille tarifaire.</p>
      <?php } } ?>

      <?php if ($requete->getDescripRequete() != '') { ?>
        <h3>Demande du client : </h3>
        <p><?=$requete->getDescripRequete()?></p>
      <?php } ?>
    </div>

  <?php } ?>
    </div>

    <form action="annonce.controler.php">
      <input class = "Accepter" name="Accepter" type="submit" value="Se proposer pour cette annonce">
    </form>

</body>
</html>
