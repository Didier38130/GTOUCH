<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gtouch Devis</title>
</head>
<body>

  <?php //include('header.view.php'); ?>
  <?php $DAO->updateDescripRequeteClient($_SESSION['idRequete'], $_SESSION['descrip']); ?>
  <br>
  <br>
  <br>
  <h2>Veuillez telecharger votre image ici : </h2>
  <form action="devis_image.controler.php" method="POST">
    <input type="file" name="image" value='image'><br><br>
    <input class = "Valider" name="Valider" type="submit" value="Valider">
  </form>

</body>

</html>
