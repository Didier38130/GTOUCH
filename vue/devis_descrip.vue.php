<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Gtouch Devis</title>
</head>
<body>

  <?php include('header.view.php'); ?>
  <?php $_SESSION['idRequete'] = $DAO->insertRequeteClient($loginClient, $idClient, $listeId, $dateRequete); ?>
  <br>
  <br>
  <br>
  <h2>Vous souhaitez préciser vos attentes ?</h2>
  <form action="devis_descrip.controler.php">
    <textarea rows="4" cols="50" name="descrip" placeholder="Ecrivez vos détails ici"></textarea>
    <input class = "suivant" name="Suivant" type="submit" value="Suivant">
  </form>

</body>

</html>
