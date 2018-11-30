<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
    <p>
      Votre inscritption à été confirmée, retourner à la
      <a href="../controler/page_acceuil.controler.php?id=1">Page D'acceuil</a>.

    </p>
  </body>
</html>
