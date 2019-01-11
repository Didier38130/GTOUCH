<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/devisDescript.css">
  <title>Gtouch Devis</title>
</head>
<body>

  <?php include('header.view.php'); ?>

  <img src="../model/data/img/demande.jpg" alt="">

  <div class="container">
  <?php $_SESSION['idRequete'] = $DAO->insertRequeteClient($loginClient, $idClient, $listeId, $dateRequete); ?>

  <h2>Vous souhaitez préciser vos attentes ?</h2>
  <form action="devis_descrip.controler.php">
    <textarea name="descrip" placeholder="Ecrivez vos détails ici"></textarea>
    <input class = "suivant" name="Suivant" type="submit" value="Suivant">
  </form>
  </div>

</body>

</html>
