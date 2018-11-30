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
        <p>E-mail :</p>
          <input type="text" name="e-mail" placeholder="E-mail" required>
  </div>
<div class="item">
      <p>Login :</p>
      <input type="text" name="pseudo"placeholder="Pseudo" required>
</div>
<div class="item">
      <p>Mot de passe :</p>
      <input type="password" name="mdp" placeholder="Mot de passe" required>
</div>
<div class="item">
      <p>Confirmation mot de passe :</p>
      <input type="password" name="mdpConfirm" placeholder="Confirmation" required>
</div>
<div class="item">
      <p>Nom :</p>
        <input type="text" name="nom" placeholder="Nom" required>
</div>
<div class="item">
      <p>Prénom :</p>
        <input type="text" name="prenom" placeholder="Prénom" required>
</div>
<div class="item">
    <p>Sexe :</p>
  <div class="checkbox">
        <p>Homme</p>
        <input type="radio"  name="sexe" required>
        <p>Femme</p>
        <input type="radio" name="sexe" required>
        <p>Autre</p>
        <input type="radio" name="sexe" required>
  </div>
</div>
<div class="item">
      <p>Téléphone :</p>
        <input type="text" name="telephone" placeholder="Téléphone" required>
</div>
<div class="item">
      <p>Adresse :</p>
        <input type="text" name="adresse" placeholder="Adresse" required>
</div>
      <input class="valider" type="submit" name="Valider" value="Valider">
    </form>

  </body>
</html>
