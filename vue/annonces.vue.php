<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Annonces</title>
</head>
<body>
  <?php include('header.view.php'); ?>
  <br>
  <br>
  <br>
  <br>
  <?php if(isset($requetes)) {foreach ($requetes as $requete) { ?>
    <a href="../controler/annonce.controler.php?idReq=<?= $requete->getIdRequete() ?>"><?= $requete->getLoginCLient() ?></a>
    <br><br>
  <?php } } ?>



</body>
