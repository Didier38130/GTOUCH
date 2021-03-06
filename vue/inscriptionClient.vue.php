<!DOCTYPE html>
<html lang=fr dir="ltr">
  <head>
    <link rel="stylesheet" href="../vue/css/inscription.vue.css">
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>

  <a href="../controler/page_accueil.controler.php"><img class="retour" src="../model/data/img/backspace.png" alt=""></a>

  <div class="formulaire">
    <form class="" action="../controler/inscription.controler.php" method="post">
      <header>
        <h2>Inscription</h2>
      </header>
      <div class="contenair">

        <div class="cont1">
          <div class="item">
            <p>E-mail :</p>
            <input type="text" name="e-mail" placeholder="E-mail" required>
          </div>
          <div class="item">

            <p>Login :</p>
            <input type="text" name="login"placeholder="login" required>

            <p>Mot de passe :</p>
            <input type="password" name="mdp" placeholder="Mot de passe" required>

          </div>

        </div>

        <div class="cont2">


          <div class="item">
            <p>Prénom :</p>
            <input type="text" name="prenom" placeholder="Prénom" required>

            <p>Nom :</p>
            <input type="text" name="nom" placeholder="Nom" required>

            <p>Confirmation mot de passe :</p>
            <input type="password" name="mdpConfirm" placeholder="Confirmation" required>
          </div>
        </div>

        <div class="cont3">
          <div class="item">
            <p>Sexe :</p>
            <div class="checkbox">
              <div class="box1">
                <p>Homme</p>
                <input type="radio"  name="sexe" required>
              </div>
              <div class="box2">
                <p>Femme</p>
                <input type="radio" name="sexe" required>
              </div>
              <div class="box3">
                <p>Autre</p>
                <input type="radio" name="sexe" required>
              </div>
            </div>
          </div>
        </div>

        <div class="cont4">
          <div class="item">
            <p>Téléphone :</p>
            <input type="text" name="telephone" placeholder="Téléphone" required>
          </div>
        </div>

        <div class="cont5">
          <div class="item">
            <p>Adresse :</p>
            <input type="text" name="adresse" placeholder="Adresse" required>
          </div>
        </div>

        <div class="cont6">
          <button class="valider">Valider</button>
        </div>

      </div>
    </form>
  </div>

  </body>
</html>
