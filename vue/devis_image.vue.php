<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/devisImage.css">
  <title>Gtouch Devis</title>
</head>
<body>

  <?php include('header.view.php'); ?>
  <img src="../model/data/img/demande.jpg" alt="">

  <div class="container">

  <?php $DAO->updateDescripRequeteClient($_SESSION['idRequete'], $_SESSION['descrip']); ?>

  <h2>Veuillez déposer votre image ici : </h2>
  <form action="devis_image.controler.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <button class="Valider" type="submit" name="Valider">Valider</button>
  </form>

  </div>

</body>

</html>
