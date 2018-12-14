<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/header.view.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <nav>

      <ul>
        <li class="accueil"><a href="#">GTOUCH</a></li>
        <li class="annonces"><a href="#">Annonces</a></li>
        <li class="portfolios"><a href="#">Portfolios</a></li>
        <?php if (isset($_SESSION['pseudo'])) { ?>
          <li class="compte"><a href="#">Mon compte</a>
          <li class="deco"><a href="#">Deconnexion</a>
        <?php } else { ?>
          <li class="menu-inscription"><a href="#">Inscription &#x25bc</a>
            <ul class = "sebmenu">
              <li class=""><a href="inscription.vue.php">JE SUIS CREATIF</a></li>
              <li class=""><a href="inscription.vue.php">JE SUIS CLIENT</a></li>
            </ul>
          </li>
          <li class="menu-connexion"><a href="#">Connexion &#x25bc</a>
            <ul class = "sebmenu">
              <li class=""><a href="connexion.vue.php">LOGIN CREATIF</a></li>
              <li class=""><a href="connexion.vue.php">LOGIN CLIENT</a></li>
            </ul>
          </li>
        <?php } ?>
        <li class="demande"><a href="#">Déposer une annonce</a></li>
      </ul>

    </nav>



  </body>
</html>
