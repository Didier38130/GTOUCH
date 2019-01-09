<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolios</title>
  </head>
  <body>

    <?php
    if ($portfolios == NULL) {
      ?>
      <h2>Pas de portfolios pour le moment, revenez plus tard !</h2>
      <?php
    }
    else {
      foreach ($portfolios as $key => $value) {
        $res = $BDD->getLoginFromIdGraphiste($value->getId());
        $login = $res[0]->getLoginUtil();
        $competences = $value->getCompetences();
        $descriptionPerso = $value->getDescription();
        $logiciels = $value->getLogiciels();
        ?>
        <div class="portfolio">
          <div class="desc">
            <h3>Portfolio de <?php echo $login ?></h3>
            <p><?php echo $descriptionPerso ?></p>
          </div>
          <div class="competence">
            <h4>Compétences du graphistes</h4>
            <p><?php echo $competences ?></p>
          </div>
          <div class="Realisations">
            <h4>Dernieres réalisations : </h4>
            <p>A voir !!!</p>
          </div>
          <div class="logiciel">
            <h4>Logiciels maitrisés</h4>
            <p><?php echo $logiciels ?></p>
          </div>
        </div>
        <?php
      }
    }
    ?>

  </body>
</html>
