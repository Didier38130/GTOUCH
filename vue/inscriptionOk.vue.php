  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
        <?php
      include("header.view.php");
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

      <p>
        Votre inscritption à été confirmée, retourner à la
        <a href="../controler/page_acceuil.controler.php?id=1">Page D'acceuil</a>.

      </p>
    </body>
  </html>
