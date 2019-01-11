<!DOCTYPE html>
<html lang="fr" dir="ltr">
<link rel="stylesheet" href="../vue/css/devis.vue.css">
<head>
  <meta charset="utf-8">
  <title>Gtouch Devis</title>
</head>
<body>

  <?php include('header.view.php'); ?>

  <img src="../model/data/img/demande.jpg" alt="">


  <div class="contenair">

    <form class="infos" action="devis.controler.php">

      <p>Vous pouvez entourer les modifications et ajouter des annotations sur vos photos <a href="#">ici</a> </p>
      <p>Cocher les cases corespondant à vos retouches :</p>
      <div class="choix">

        <?php if (isset($nomServiceGrandparent_1)) { ?>
          <label class="gparent" for="nomServiceGrandparent_1"><p>Retouche beauté</p></label>
          <input type="checkbox" id="nomServiceGrandparent_1" name="nomServiceGrandparent_1" value="Reetouche beauté" checked>
          <br>
          <?php if (isset($nomServiceParent_1)) { ?>
            <label class="parent" for="nomServiceParent_1"><p>Corps</p></label>
            <input type="checkbox" id="nomServiceParent_1" name="nomServiceParent_1" value="Corps" checked>
            <br>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_6)) { ?>
              <label class="service"  for="nomService_6"><p>Formes</p></label>
              <input type="checkbox" id="nomService_6" name="nomService_6" value="6" checked>
              <br>
            <?php } else { ?>
              <label class="service" for="nomService_6"><p>Formes</p></label>
              <input type="checkbox" id="nomService_6" name="nomService_6" value="6">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_7)) { ?>
              <label class="service" for="nomService_7"><p>Silhouettes</p></label>
              <input type="checkbox" id="nomService_7" name="nomService_7" value="7" checked>
              <br>
            <?php } else { ?>
              <label class="service" for="nomService_7"><p>Silhouettes</p></label>
              <input type="checkbox" id="nomService_7" name="nomService_7" value="7">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
          <?php } else { ?>
            <label class="parent" for="nomServiceParent_1"><p>Corps</p></label>
            <input type="checkbox" id="nomServiceParent_1" name="nomServiceParent_1" value="Corps">
            <br>
          <?php } ?>
          <?php if (isset($nomServiceParent_2)) { ?>
            <label class="parent" for="nomServiceParent_2"><p>Visage</p></label>
            <input type="checkbox" id="nomServiceParent_2" name="nomServiceParent_2" value="Visage" checked>
            <br>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_8)) { ?>
              <label class="service" for="nomService_8"><p>Regard</p></label>
              <input type="checkbox" id="nomService_8" name="nomService_8" value="8" checked>
              <br>
            <?php } else { ?>
              <label class="service" for="nomService_8"><p>Regard</p></label>
              <input type="checkbox" id="nomService_8" name="nomService_8" value="8">
              <br>

            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_9)) { ?>
              <label class="service" or="nomService_9"><p>Peau</p></label>
              <input type="checkbox" id="nomService_9" name="nomService_9" value="9" checked>
              <br>

            <?php } else { ?>
              <label class="service" for="nomService_9"><p>Peau</p></label>
              <input type="checkbox" id="nomService_9" name="nomService_9" value="9">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_10)) { ?>
              <label class="service" for="nomService_10"><p>Nez</p></label>
              <input type="checkbox" id="nomService_10" name="nomService_10" value="10" checked>
              <br>

            <?php } else { ?>
              <label class="service" for="nomService_10"><p>Nez</p></label>
              <input type="checkbox" id="nomService_10" name="nomService_10" value="10">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
          <?php } else { ?>
            <label class="parent" for="nomServiceParent_2"><p>Visage</p></label>
            <input type="checkbox" id="nomServiceParent_2" name="nomServiceParent_2" value="Visage">
            <br>
          <?php } ?>
        <?php } else { ?>
          <label class="gparent" for="nomServiceGrandparent_1"><p>Retouche beauté</p></label>
          <input type="checkbox" id="nomServiceGrandparent_1" name="nomServiceGrandparent_1" value="Retouche beauté">
          <br>
        <?php } ?>
        <?php if (isset($nomServiceGrandparent_2)) { ?>
          <label class="gparent" for="nomServiceGrandparent_2"><p>Retouche paysage</p></label>
          <input type="checkbox" id="nomServiceGrandparent_2" name="nomServiceGrandparent_2" value="Retouche paysage" checked>
          <br>
          <?php if (isset($nomServiceParent_3)) { ?>
            <label class="parent" for="nomServiceParent_3"><p>Retirer objet</p></label>
            <input type="checkbox" id="nomServiceParent_3" name="nomServiceParent_3" value="Retirer objet" checked>
            <br>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_1)) { ?>
              <label class="service" for="nomService_1"><p>Isolation</p></label>
              <input type="checkbox" id="nomService_1" name="nomService_1" value="1" checked>
              <br>

            <?php } else { ?>
              <label class="service" for="nomService_1"><p>Isolation</p></label>
              <input type="checkbox" id="nomService_1" name="nomService_1" value="1">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_3)) { ?>
              <label class="service" for="nomService_3"><p>Défaut</p></label>
              <input type="checkbox" id="nomService_3" name="nomService_3" value="3" checked>
              <br>

            <?php } else { ?>
              <label class="service" for="nomService_3"><p>Défaut</p></label>
              <input type="checkbox" id="nomService_3" name="nomService_3" value="3">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_2)) { ?>
              <label class="service" for="nomService_2"><p>Elément</p></label>
              <input type="checkbox" id="nomService_2" name="nomService_2" value="2" checked>
              <br>

            <?php } else { ?>
              <label class="service" for="nomService_2"><p>Elément</p></label>
              <input type="checkbox" id="nomService_2" name="nomService_2" value="2">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
          <?php } else { ?>
            <label class="parent" for="nomServiceParent_3"><p>Retirer objet</p></label>
            <input type="checkbox" id="nomServiceParent_3" name="nomServiceParent_3" value="Retirer objet">
            <br>
          <?php } ?>
          <?php if (isset($nomServiceParent_4)) { ?>
            <label class="parent" for="nomServiceParent_4"><p>Ambiance</p></label>
            <input type="checkbox" id="nomServiceParent_4" name="nomServiceParent_4" value="Ambiance" checked>
            <br>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_4)) { ?>
              <label class="service" for="nomService_4"><p>Lumière</p></label>
              <input type="checkbox" id="nomService_4" name="nomService_4" value="4" checked>
              <br>

            <?php } else { ?>
              <label class="service" for="nomService_4"><p>Lumière</p></label>
              <input type="checkbox" id="nomService_4" name="nomService_4" value="4">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
            <?php if (isset($nomService_5)) { ?>
              <label class="service" for="nomService_5"><p>Couleur</p></label>
              <input type="checkbox" id="nomService_5" name="nomService_5" value="5" checked>
              <br>

            <?php } else { ?>
              <label class="service" for="nomService_5"><p>Couleur</p></label>
              <input type="checkbox" id="nomService_5" name="nomService_5" value="5">
              <br>
            <?php } ?>
            <!----------------------------------------------------------------------------->
          <?php } else { ?>
            <label class="parent" for="nomServiceParent_4"><p>Ambiance</p></label>
            <input type="checkbox" id="nomServiceParent_4" name="nomServiceParent_4" value="Ambiance">
            <br>
          <?php } ?>
        <?php } else { ?>
          <label class="gparent" for="nomServiceGrandparent_2"><p>Retouche paysage</p></label>
          <input type="checkbox" id="nomServiceGrandparent_2" name="nomServiceGrandparent_2" value="Retouche paysage">
          <br>
        <?php } ?>
        <?php if (isset($nomService_0) && (!isset($details_service_0) || $details_service_0 == null)) { ?>

        <?php } else if (isset($nomService_0) && (isset($details_service_0) || $details_service_0 != null)) { ?>
        	<!-- <label for="nomService_0">Autre</label>
          <input type="checkbox" id="nomService_0" name="nomService_0" value="0" checked>
          <br>
          <p>Veuillez écrire vos détails ici</p>
          <input type="text" name="details_service_0" placeholder="Ecrivez vos détails ici (obligatoire)">
          <br> -->
        <?php } else { ?>
          <!-- <label for="nomService_0">Autre</label>
          <input type="checkbox" id="nomService_0" name="nomService_0" value="0">
          <br> -->
        <?php } ?>
        <div class="bouton">
        <input class = "suivant" name="Suivant" type="submit" value="Suivant">
        <input class = "valider" name="Valider" type="submit" value="Valider">
        </div>
      </div>
    </form>

  </div>

  </body>

  </html>
