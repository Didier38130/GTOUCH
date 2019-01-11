<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../vue/css/propositionAccepte.css">
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
            echo '<h1>Merci, votre proposition a été enregistrée !</h1>';
          } else {
            echo '<h1>Vous devez être graphiste pour vous proposer</h1>';
          }
        } else {
          header('Location: connexion.controler.php');
        }
  ?>

</body>

</html>
