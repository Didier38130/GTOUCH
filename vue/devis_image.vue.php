<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gtouch Devis</title>
</head>
<body>

  <?php include('header.view.php'); ?>
  <?php $DAO->updateDescripRequeteClient($_SESSION['idRequete'], $_SESSION['descrip']); ?>
  <br>
  <br>
  <br>
  <h2>Veuillez télécharger votre image ici : </h2>
  <form action="devis_image.controler.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file"><br><br>
    <button type="submit" name="Valider">Valider</button>
  </form>

</body>

</html>
