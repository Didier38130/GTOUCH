<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/portfolio.css">
    <title>Portfolios</title>
  </head>
  <body>

    <img src="../model/data/img/portfolio.png" alt="baniere" class="baniere">

    <?php
    if ($portfolios == NULL) {
      ?>
      <div class="erreur">
        <img src="../model/data/img/oops.jpg" alt="erreur">
        <h2>Pas de portfolios pour le moment, revenez plus tard !</h2>
      </div>
      <?php
    }
    else {
      ?>
      <div class="portfolios">
      <h2>Vous trouverez ici l'ensemble des porfolios de nos graphistes !</h2>
      <?php
      foreach ($portfolios as $key => $value) {
        $res = $BDD->getLoginFromIdGraphiste($value->getId());
        $login = $res[0]->getLoginUtil();
        $competences = $value->getCompetences();
        $descriptionPerso = $value->getDescription();
        $logiciels = $value->getLogiciels();
        ?>
        <div class="portfolio">
          <div class="cont1">
          <div class="desc">
            <h3>Portfolio de <?php echo $login ?></h3>
            <p><?php echo $descriptionPerso ?></p>
          </div>
          <div class="competence">
            <h4>Compétences du graphistes</h4>
            <p><?php echo $competences ?></p>
          </div>
          </div>
          <div class="cont2">
          <div class="realisations">
            <h4>Dernieres réalisations : </h4>
            <p>A voir !!!</p>
          </div>
          <div class="logiciel">
            <h4>Logiciels maitrisés</h4>
            <p><?php echo $logiciels ?></p>
          </div>
          </div>
        </div>
        <?php
      }
      ?>
      </div>
      <?php
    }
    ?>

  </body>
</html>
