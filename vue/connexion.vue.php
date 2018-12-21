<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="./css/connexion.vue.css">
<head>
  <meta charset="utf-8">
  <title>Connexion</title>
</head>
<body>

  <a href="page_accueil.vue.php"><img src="../model/data/img/backspace.png" alt=""></a>

  <div class="formulaire">
    <form class="" action="../controler/page_acceuil.controler.php?id=1" method="post">
      <label>E-mail</label>
      <input type="text" name="mail" placeholder="E-mail" >
      <label>Mot de passe</label>
      <input type="password" name="mdp" placeholder="Mot de passe" required>
      <button class="connexion">Connexion</button>

      <footer>
        <h3>Inscription</h3>
        <button class="inscription"><a href="../vue/inscription.vue.php">Créer un compte</a></button>
      </footer>
    </form>
  </div>


</body>
</html>
