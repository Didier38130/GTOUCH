<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="./css/offline.vue.css">
<head>
  <meta charset="utf-8">
  <title>Gtouch Devis</title>
</head>
<body>
  <h1>Gtouch</h1>

  <?php
  include('header.view.php');
  if(isset($_SESSION['mail'])){
    echo "<a href=\"mon_compte.controller.php?id=";
    echo $_SESSION['login'];
    echo"<p>Bienvenue";
    echo $_SESSION['login'];
    echo"</p></a>";
    echo"<a href=\"../controler/deconnexion.controler.php\"><p>Déconnexion</p></a>";
  }
  else {
    echo "<a href=\"../vue/connexion.vue.php\"><p>Se connecter</p></a>";
  }
  ?>
</body>
</html>
