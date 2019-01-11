<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="../vue/css/projet.vue.css">
<head>
  <meta charset="utf-8">
  <title>Commande</title>
</head>
<body>
  <header>
    <?php include("../vue/header.view.php"); ?>
    <img src="../model/data/img/baniere.jpg" alt="Header" id="baniere">
    <?php include("../vue/header_compte_graphiste.vue.php");?>
  </header>
  <?php
  foreach($requete as $k=>$v){
    $unique=array_unique($v);
    $array[$k]=$unique;
    echo '<div id="Commande"';
    echo '<p>Numéro de la commande: '.$array[0]["idRequete"].'</p>';
    echo '<p>Date de la commande: '.$array[0]["dateRequete"].'<p>';
    echo '<p>Client ayant soumis la commande: '.$array[0]["login"].'<p>';
    echo '</div>';
  }
  ?>
</body>
<footer>
<?php include("../vue/footer.vue.php"); ?>
</footer>
</html>
