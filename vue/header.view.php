<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../vue/css/header.vue.css">
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>

    <nav>

      <ul>
        <li class="accueil"><a href="page_accueil.controler.php">GTOUCH</a></li>
        <li class="annonces"><a href="#">Annonces</a></li>
        <li class="portfolios"><a href="#">Portfolios</a></li>
        <?php if (isset($_SESSION['e-mail'])) { ?>
          <li class="compte"><a href="../controler/mon_compte.controler.php">Mon compte</a>
          <li class="deco"><a href="../controler/deconnexion.controler.php">Deconnexion</a>
        <?php } else { ?>
          <li class="menu-inscription"><a href="#">Inscription &#x25bc</a>
            <ul class = "sebmenu">
              <li class=""><a href="../vue/inscriptionGraphiste.vue.php">JE SUIS CREATIF</a></li>
              <li class=""><a href="../vue/inscriptionClient.vue.php">JE SUIS CLIENT</a></li>
            </ul>
          </li>
          <li class="connexion"><a href="../controler/connexion.controler.php">Connexion</a></li>
        <?php } ?>
        <li class="demande"><a href="../controler/devis.controler.php">Déposer une annonce</a>
          <ul class = "sebmenu">
            <li class=""><a href="../vue/mode_emploi.vue.php">MODE EMPLOI</a></li>
          </ul>
        </li>
      </ul>

    </nav>



  </body>
</html>
