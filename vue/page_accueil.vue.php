<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="page_accueil.vue.css">
  <head>
    <meta charset="utf-8">
    <title>Gtouch</title>
  </head>
  <body>
      <h1>Gtouch</h1>
    <h2>Bienvenue sur Gtouch</h2>
    <nav>
      <a href="page_accueil.vue.php"><p>Accueil</p></a>
      <a href="devis.vue.php"><p>Retoucher une photo</p></a>
      <a href="mode_emploi.vue.php"><p>Mode d'emploi</p></a>
      <?php
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

    </nav>
    <div class="intro">
      <h3>Qui sommes nous?</h3>
      <p>Gtouch est une filliale de photoweb qui permet la retouche de
         photos poussé à l'aide de graphistes.</p>
    </div>
  </body>
</html>
