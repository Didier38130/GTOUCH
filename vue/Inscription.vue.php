<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <link rel="stylesheet" href="Inscription.vue.css">
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>
    <nav>
      <a href="page_accueil.vue.php"><p>Accueil</p></a>
      <a href="devis.vue.php"><p>Demander un devis</p></a>
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
    <form class="" action="../controler/inscription.controleur.php?id=1" method="post">
<div class="item">
      <p>Pseudo :</p>
      <input type="text" name="pseudo"placeholder="Pseudo" required>
</div>
<div class="item">
      <p>E-mail :</p>
      <input type="text" name="e-mail" placeholder="E-mail" required>
</div>
<div class="item">
      <p>Mot de passe :</p>
      <input type="password" name="mdp" placeholder="Mot de passe" required>
</div>
<div class="item">
      <p>Confirmation mot de passe :</p>
      <input type="password" name="mdpConfirm" placeholder="Confirmation" required>
</div>
      <input class="connexion" type="submit" name="connexion" value="Inscription">
    </form>

  </body>
</html>
