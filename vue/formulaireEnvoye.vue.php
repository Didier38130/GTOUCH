<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Formulaire envoyé</title>
</head>
<body>

  <?php include('header.view.php'); ?>
  <?php $DAO = new gtouchDAO(); ?>
  <?php $DAO->updateImageRequeteClient($_SESSION['idRequete'], $image); ?>
  <br>
  <br>
  <br>
  <h2>Merci, votre requête a été déposée</h2>

</body>

</html>
