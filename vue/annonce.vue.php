<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Annonce</title>
</head>
<body>
  <?php $DAO = new gtouchDAO(); ?>
  <?php include('header.view.php'); ?>
  <br>
  <br>
  <br>
  <h2>Requête datée du <?= $requete->getDateRequete() ?></h2>
  <?php if(isset($requete)) { ?>
    <?php $listeId = $requete->getListeId(); $tableauId = explode('&', $listeId); ?>

    <?php if(isset($tableauId)) { foreach ($tableauId as $id) { $service = $DAO->getServiceFromId($id); var_dump($id);?>
      <h2>Retouche : <?= $service->getNomService() ?></h2>
      <?php $image = $requete->getImage(); ?>
      <img src="data:image/jpeg:base64.'.<?=base64_encode($image)?>.'" class="img"/>
      <h3><?= $service->getDescripService() ?></h3>
      <h3>Le graphiste recevra un montant de : <?= $service->getPrixService() ?>€ pour cette retouche, conformément à la grille tarifaire.</h3>
      <br>
    <?php } } ?>

    <?php if ($requete->getDescripRequete() != '') { ?>
      <h3><?=$requete->getLoginClient()?> dit : </h3>
      <h4><?=$requete->getDescripRequete()?></h4>
    <?php } ?>

    Se proposer pour cette annonce :
    <br><br>
    <form action="annonce.controler.php">
      <input class = "Accepter" name="Accepter" type="submit" value="Accepter">
    </form>

  <?php } ?>

</body>
</html>
