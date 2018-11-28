<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="connexion.vue.css">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
  </head>
  <body>
      <h1>Gtouch</h1>
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
        <form class="" action="../controler/page_acceuil.controler.php?id=1" method="post">
          <p>E-mail</p>
          <input type="text" name="mail" placeholder="E-mail" >
          <p>Mot de passe</p>
          <input type="password" name="mdp" placeholder="Mot de passe" required>
          <input class="connexion" type="submit" name="connexion" value="Connexion">
        </form>


      </body>
    </html>
