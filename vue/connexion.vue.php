<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="../vue/css/connexion.vue.css">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
</head>
<body>

  <a href="../controler/page_accueil.controler.php"><img src="../model/data/img/backspace.png" alt=""></a>

  <div class="formulaire">
    <form class="" action="../controler/connexion.controler.php" method="POST">
      <label>E-mail</label>
      <input type="text" name="mail" placeholder="E-mail" >
      <label>Mot de passe</label>
      <input type="password" name="mdp" placeholder="Mot de passe" required>
      <button class="connexion">Connexion</button>

      <footer>
        <h3>Inscription : </h3>
        <a href="../vue/quiestce.vue.php"><p class="inscription">Créer un compte</p></a>
      </footer>
    </form>
  </div>


</body>
</html>
