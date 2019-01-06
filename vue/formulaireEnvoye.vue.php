<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Formulaire envoyé</title>
</head>
<body>

  <?php include('header.view.php'); ?>
  <?php $DAO = new gtouchDAO(); ?>
  <?php $DAO->insertRequeteClient($loginClient, $idClient, $listeId, $dateRequete) ?>

  <h2>Merci, votre requête a été déposée</h2>

</body>

</html>
