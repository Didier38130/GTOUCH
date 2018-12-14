  <!DOCTYPE html>
  <html lang="fr" dir="ltr">
  <link rel="stylesheet" href="mode_emploi.vue.css">
    <head>
      <meta charset="utf-8">
      <title>Gtouch Mode d'emploi</title>
    </head>
    <body>
        <h1>Gtouch</h1>
          <?php
        include('header.view.php') ;
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
      <div class="emploi">
        <h2>Mode d'emploi</h2>
        <h3>étape 1</h3>
        <p>connectez-vous ou créez un compte Gtouch</p>
        <h3>étape 2</h3>
        <p>Importer une photo dans "Retoucher une photo" et remplir le formulaire</p>
        <h3>étape 3</h3>
        <p>Evaluation du devis: acceptation ou non.</p>
        <h3>étape 4</h3>
        <p>Si acceptation, prépaiement de la prestation, choix du graphiste parmis une séléction et attente de la réalisation de la prestation du graphiste</p>
        <h3>étape 5</h3>
        <p>Ouverture de la messagerie entre le client et le graphiste et réception de la photo retouchée</p>
        <h3>étape 6</h3>
        <p>Si acceptation, client débité du prix de la prestation puis fin de la prestation.</p>
        <p>Si refus, rectifications via messagerie avec le graphiste ou annulation*. (1ère fois gratuite puis rectifications payantes, augmentant à chacune d'entre elles)</p>
        <h3>étape 7</h3>
        <p>Récupérer la photo finale et possible redirection vers <a href="photoweb.fr">Photoweb afin de choisir un cadre et l'imprimer sa photo</a> </p>
      </div>
  <p>*Si annulation de la commande, remboursement d'une partie de la somme totale de la prestation.</p>
    </body>
  </html>
