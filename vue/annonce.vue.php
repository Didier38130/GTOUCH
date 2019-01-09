<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Formulaire envoyé</title>
</head>
<body>
  <?php $DAO = new gtouchDAO(); ?>
  <?php include('header.view.php'); ?>
  <br>
  <br>
  <br>
  <?php if(isset($requete)) { ?>
    <?php $listeId = $requete->getListeId(); $tableauId = explode('&', $listeId); ?>
    <?php if(isset($tableauId)) { foreach ($tableauId as $id) { $service = $DAO->getServiceFromId($id); ?>
      <h2><?= $service->getNomService() ?></h2>
      <h3><?= $service->getDescripService() ?></h3>
      <h3>Le graphiste recevra un montant de : <?= $service->getPrixService() ?>€ pour cette retouche, conformément à la grille tarifaire.</h3>
      <br><br>
    <?php } } ?>
    Se proposer pour cette annonce :
    <br><br>
    <form action="annonce.controler.php">
      <input class = "Accepter" name="Accepter" type="submit" value="Accepter">
    </form>

  <?php } ?>

</body>
