  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <link rel="stylesheet" href="css/erreurInscription.vue.css">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>
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
      <p>Erreur lors de l'inscription :</p>
      <?php  foreach ($listErr as $value) {
        echo "<p>", $value, "</p>";
      }
      ?>
      <p>Cliquez <a href="../vue/Inscription.vue.php">ici</a> pour revenir à la page d'inscription</p>
    </body>
  </html>
