<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Formulaire envoyé</title>
</head>
<body>

  <?php include('header.view.php'); ?>
  <?php $DAO = new gtouchDAO(); ?>
  <?php if (isset($_SESSION["e-mail"])) {
          $util = $DAO->getUtilFromMail($_SESSION['e-mail']);
          $idGraph = $util->getIdUtil();

          if ($DAO->mailDeGraphiste($_SESSION["e-mail"]) == true) {
            $DAO->addProposition($_SESSION['idRequ'], $idGraph, $dateProposition);
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<h1>Merci, votre proposition a été enregistrée !</h2>';
          } else {
            echo '<br>';
            echo '<br>';
            echo '<br>';
            echo '<h1>Vous devez être graphiste pour vous proposer</h2>';
          }
        } else {
          header('Location: connexion.controler.php');
        }
  ?>

</body>

</html>
