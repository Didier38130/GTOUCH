<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="devis.vue.css">
  <head>
    <meta charset="utf-8">
    <title>Gtouch Devis</title>
  </head>
  <body>
    <h1>Gtouch</h1>
    <nav>
      <a href="page_accueil.vue.php"><p>Accueil</p></a>
      <a href="devis.vue.php"><p>Retoucher une photo</p></a>
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
    <p>Ici vous pouvez télécharger vos photos afin d'avoir l'aide d'un graphiste,
       pour ce faire nous avons besoin de quelques informations à votre sujet
        ainsi que la photo et une description des modifications que le graphiste
         devra faire.</p>

      <form class="infos" action="devis.controler.php">
        <p>Votre photo </p>
        <input type="file" class="photo">
        <p>Vous pouvez entourer les modifications et ajouter des annotations sur vos photos <a href="#">ici</a> </p>
        <p>Description détaillée du projet</p>
        <input class="descr" type="text" class="description" placeholder="Description du projet">
        <p>Cocher les cases corespondant à vos retouches :</p>
        <div class="choix">


        <label for="type_retouche_1">Retouche beauté</label>
        <input type="checkbox" id="type_retouche_1" name="type_retouche_1" value="Retouche beauté">
        <label for="type_retouche_2">Retouche paysage</label>
        <input type="checkbox" id="type_retouche_2" name="type_retouche_2" value="Retouche paysage">

        <label for="type_retouche_3">Autre</label>
        <input type="checkbox" id="type_retouche_3" name="type_retouche_3" value="type_retouche_3">
        <input class="valider" type="submit" value="valider">
        </div>
      </form>


  </body>
</html>
