<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="dialogue.vue.css">
<head>
  <meta charset="utf-8">
  <title>Gtouch</title>
</head>
<body>
  <h1>Gtouch</h1>
  <h2>Bienvenue sur Gtouch</h2>
  <?php
  include('header.view.php');
  if(isset($_SESSION['mail'])){
    echo "<a href=\"monCompte.controller.php?id=";
    echo $_SESSION['mail'];
    echo"<p>Bienvenue";
    echo $_SESSION['mail'];
    echo"</p></a>";
    echo"<a href=\"../controler/deconnexion.controler.php\"><p>Déconnexion</p></a>";
  }
  else {
    echo "<a href=\"../vue/connexion.vue.php\"><p>Se connecter</p></a>";
  }
  ?>
  <h2>Projet en cours</h2>
  <div class="projet">
    <p>Vous:</p>
    <p>J'aimerai des couleurs plus vive et que l'on efface les personnes sur le fond de la photo</p>
    <p>Graphiste:</p>
    <p>D'accord ai-je bien compris votre demande?</p>
    <p>Vous:</p>
    <p>Blablabla...</p>
  </div>

</body>
</html>
