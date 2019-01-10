<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/modifPorfolio.css">
    <title>Modif portfolio</title>
  </head>
  <body>
    <div class="container">
      <h2>Voici votre portfolio actuel : </h2>
      <?php
      $res = $BDD->getLoginFromIdGraphiste($portfolio[0]->getId());
      $login = $res[0]->getLoginUtil();
      $competences = $portfolio[0]->getCompetences();
      $descriptionPerso = $portfolio[0]->getDescription();
      $logiciels = $portfolio[0]->getLogiciels();
      ?>
      <div class="portfolio">
        <div class="cont1">
          <div class="desc">
            <h3>Portfolio de <?php echo $login ?></h3>
            <p><?php echo $descriptionPerso ?></p>
          </div>
          <div class="realisations">
            <h4>Dernieres réalisations : </h4>
            <p>A voir !!!</p>
          </div>
        </div>
        <div class="cont2">
          <div class="competence">
            <h4>Compétences du graphistes</h4>
            <p><?php echo $competences ?></p>
          </div>
          <div class="logiciel">
            <h4>Logiciels maitrisés</h4>
            <p><?php echo $logiciels ?></p>
          </div>
        </div>
      </div>
      <div class="modif">
        <h2 class="h2">Vous pouvez le modifier ici : </h2>
        <form class="modifPortfolio" action="modifPortfolio.controler.php" method="post">
          <label>Description personnelle</label>
          <textarea type="text" name="desc" class ="descri" placeholder="Bonjour, je m'apelle ... je suis graphiste spécialisé en ..." required></textarea>
          <div class="competlog">
            <div class="compe">
              <label>Compétences</label>
              <textarea type="text" name="comp" class="comp" placeholder="Enumérez ici vos compétences ( séparées d'un '/' )" required></textarea>
            </div>
            <div class="logi">
              <label>Logiciels</label>
              <textarea type="text" name="logi" class="log" placeholder="Enumérez ici les logiciels que vous utilisez ( séparés d'un '/' )" required></textarea>
            </div>
          </div>
          <button class="valider">Valider</button>
        </form>
      </div>
    </div>
  </body>
</html>
