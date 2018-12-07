<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <nav>

      <ul>
        <li class="accueil"><a href="#">ACCUEIL</a></li>
        <li class="creation"><a href="#">CREATION</a></li>
        <?php if (isset($_SESSION['pseudo'])) { ?>
          <li class="compte"><a href="#">MON COMPTE</a>
          <li class="deco"><a href="#">DECONNEXION</a>
        <?php } else { ?>
          <li class="menu-inscription"><a href="#">INSCRIPTION &#x25bc</a>
            <ul class = "sebmenu">
              <li class=""><a href="#">JE SUIS CREATIF</a></li>
              <li class=""><a href="#">JE SUIS CLIENT</a></li>
            </ul>
          </li>
          <li class="menu-connexion"><a href="#">CONNEXION &#x25bc</a>
            <ul class = "sebmenu">
              <li class=""><a href="#">LOGIN CREATIF</a></li>
              <li class=""><a href="#">LOGIN CLIENT</a></li>
            </ul>
          </li>
        <?php } ?>
        <li class="demande"><a href="#">FAIRE UNE DEMANDE</a></li>
      </ul>

    </nav>

    

  </body>
</html>
