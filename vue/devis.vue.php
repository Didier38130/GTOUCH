<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="devis.vue.css">
<head>
  <meta charset="utf-8">
  <title>Gtouch Devis</title>
</head>
<body>
  <h1>Gtouch</h1>
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
  <p>Ici vous pouvez télécharger vos photos afin d'avoir l'aide d'un graphiste,
    pour ce faire nous avons besoin de quelques informations à votre sujet
    ainsi que la photo et une description des modifications que le graphiste
    devra faire.</p>

    <form class="infos" action="devis.controler.php">
      <p>Votre photo </p>
      <input type="file" class="photo">
      <p>Vous pouvez entourer les modifications et ajouter des annotations sur vos photos <a href="#">ici</a> </p>
      <p>Cocher les cases corespondant à vos retouches :</p>
      <div class="choix">

        <?php if (isset($nomServiceGrandparent_1)) { ?>
          <label for="nomServiceGrandparent_1">Retouche beauté</label>
          <input type="checkbox" id="nomServiceGrandparent_1" name="nomServiceGrandparent_1" value="Retouche beauté" checked>
          <br>
          <?php if (isset($nomServiceParent_1)) { ?>
            <label for="nomServiceParent_1">Corps</label>
            <input type="checkbox" id="nomServiceParent_1" name="nomServiceParent_1" value="Corps" checked>
            <br>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_1)) { ?>
              <label for="nomService_1">Formes</label>
              <input type="checkbox" id="nomService_1" name="nomService_1" value="6" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_1" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_1">Formes</label>
              <input type="checkbox" id="nomService_1" name="nomService_1" value="6">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_3)) { ?>
              <label for="nomService_3">Silhouettes</label>
              <input type="checkbox" id="nomService_3" name="nomService_3" value="7" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_2" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_3">Silhouettes</label>
              <input type="checkbox" id="nomService_3" name="nomService_3" value="7">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
          <?php } else { ?>
            <label for="nomServiceParent_1">Corps</label>
            <input type="checkbox" id="nomServiceParent_1" name="nomServiceParent_1" value="Corps">
            <br>
          <?php } ?>
          <?php if (isset($nomServiceParent_2)) { ?>
            <label for="nomServiceParent_2">Visage</label>
            <input type="checkbox" id="nomServiceParent_2" name="nomServiceParent_2" value="Visage" checked>
            <br>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_2)) { ?>
              <label for="nomService_2">Regard</label>
              <input type="checkbox" id="nomService_2" name="nomService_2" value="8" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_3" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_2">Regard</label>
              <input type="checkbox" id="nomService_2" name="nomService_2" value="8">
              <br>

            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_4)) { ?>
              <label for="nomService_4">Peau</label>
              <input type="checkbox" id="nomService_4" name="nomService_4" value="9" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_4" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_4">Peau</label>
              <input type="checkbox" id="nomService_4" name="nomService_4" value="9">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_5)) { ?>
              <label for="nomService_5">Nez</label>
              <input type="checkbox" id="nomService_5" name="nomService_5" value="10" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_5" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_5">Nez</label>
              <input type="checkbox" id="nomService_5" name="nomService_5" value="10">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
          <?php } else { ?>
            <label for="nomServiceParent_2">Visage</label>
            <input type="checkbox" id="nomServiceParent_2" name="nomServiceParent_2" value="Visage">
            <br>
          <?php } ?>
        <?php } else { ?>
          <label for="nomServiceGrandparent_1">Retouche beauté</label>
          <input type="checkbox" id="nomServiceGrandparent_1" name="nomServiceGrandparent_1" value="Retouche beauté">
          <br>
        <?php } ?>
        <?php if (isset($nomServiceGrandparent_2)) { ?>
          <label for="nomServiceGrandparent_2">Retouche paysage</label>
          <input type="checkbox" id="nomServiceGrandparent_2" name="nomServiceGrandparent_2" value="Retouche paysage" checked>
          <br>
          <?php if (isset($nomServiceParent_3)) { ?>
            <label for="nomServiceParent_3">Retirer objet</label>
            <input type="checkbox" id="nomServiceParent_3" name="nomServiceParent_3" value="Retirer objet" checked>
            <br>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_1)) { ?>
              <label for="nomService_1">Isolation</label>
              <input type="checkbox" id="nomService_1" name="nomService_1" value="1" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_6" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_1">Isolation</label>
              <input type="checkbox" id="nomService_1" name="nomService_1" value="1">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_3)) { ?>
              <label for="nomService_3">Défaut</label>
              <input type="checkbox" id="nomService_3" name="nomService_3" value="3" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_7" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_3">Défaut</label>
              <input type="checkbox" id="nomService_3" name="nomService_3" value="3">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_2)) { ?>
              <label for="nomService_2">Elément</label>
              <input type="checkbox" id="nomService_2" name="nomService_2" value="2" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_8" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_2">Elément</label>
              <input type="checkbox" id="nomService_2" name="nomService_2" value="2">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
          <?php } else { ?>
            <label for="nomServiceParent_3">Retirer objet</label>
            <input type="checkbox" id="nomServiceParent_3" name="nomServiceParent_3" value="Retirer objet">
            <br>
          <?php } ?>
          <?php if (isset($nomServiceParent_4)) { ?>
            <label for="nomServiceParent_4">Ambiance</label>
            <input type="checkbox" id="nomServiceParent_4" name="nomServiceParent_4" value="Ambiance" checked>
            <br>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_4)) { ?>
              <label for="nomService_4">Lumière</label>
              <input type="checkbox" id="nomService_4" name="nomService_4" value="4" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_9" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_4">Lumière</label>
              <input type="checkbox" id="nomService_4" name="nomService_4" value="4">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_5)) { ?>
              <label for="nomService_5">Couleur</label>
              <input type="checkbox" id="nomService_5" name="nomService_5" value="5" checked>
              <br>
              <p>Des détails à ajouter ?</p>
              <input type="text" name="details_service_10" placeholder="Ecrivez vos détails ici">
              <br>
            <?php } else { ?>
              <label for="nomService_5">Couleur</label>
              <input type="checkbox" id="nomService_5" name="nomService_5" value="5">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
          <?php } else { ?>
            <label for="nomServiceParent_4">Ambiance</label>
            <input type="checkbox" id="nomServiceParent_4" name="nomServiceParent_4" value="Ambiance">
            <br>
          <?php } ?>
        <?php } else { ?>
          <label for="nomServiceGrandparent_2">Retouche paysage</label>
          <input type="checkbox" id="nomServiceGrandparent_2" name="nomServiceGrandparent_2" value="Retouche paysage">
          <br>
        <?php } ?>
        <label for="nomServiceGrandparent_3">Autre</label>
        <input type="checkbox" id="nomServiceGrandparent_3" name="nomServiceGrandparent_3" value="Autre">
        <input name="Suivant" type="submit" value="Suivant">
        <br>
        <input name="Valider" type="submit" value="Valider">
      </div>
    </form>

  </body>
  </html>
