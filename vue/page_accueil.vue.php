<?php
ini_set('display_errors', 'on');
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="../vue/css/page_accueil.vue.css">
  <head>
    <meta charset="utf-8">
    <title>Gtouch</title>
  </head>

  <header>
    <?php include("../vue/header.view.php"); ?>
  </header>

  <body>

    <img src="../model/data/img/baniere.png" alt="Header" id="baniere">

    <div class="intro">
      <h3>Qui sommes nous?</h3>
      <p>Gtouch est une filliale de photoweb qui permet la retouche de photos poussé à l'aide de graphistes. </p>
      <audio autoplay="true" src="../model/gtouch.mp4">
    </div>

  </body>

  <footer>
    <?php include("../vue/footer.vue.php"); ?>
  </footer>

</html>
