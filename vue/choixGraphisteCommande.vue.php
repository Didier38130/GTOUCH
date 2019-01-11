<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../vue/css/choixGraphisteCommande.css">
    <title>choix Graphiste</title>
  </head>
  <body>
    <div class="container">
      <h2>Vous pourrez ici choisir le graphiste qui vous plait le plus pour chacunes de vos demandes de retouches !</h2>
      <?php
      if ($requetesSansGraphistes == NULL) {
        ?> <h3>Toutes vos demandes de retouches sont prises en charge !</h3> <?php
      }
      else {
        ?>
        <div class="choixGraphiste">
          <?php
          foreach ($requetesSansGraphistes as $key => $value) {
            ?> <div class="retouche"> <?php
            ?> <h3 class="demandeh3">DEMANDE DE RETOUCHE DU <?php echo $value->getDateRequete() ?></h3> <?php
            $idRequete = $value->getIdRequete();
            $propositionGraphiste = $DAO->getPropositionsGraphiste($idRequete);
            if ($propositionGraphiste == NULL) {
              ?> <h4>Aucun graphiste ne s'est encore proposé pour retoucher votre photo</h4> <?php
            } else {
              ?> <h4>Ci-dessous l'ensemble des portfolios des graphistes qui se sont proposés pour cette demande de retouche : </h4> <?php
              foreach ($propositionGraphiste as $key => $value) {
                $idGraphiste = $value->getIdGraph();
                $portfolio = $DAO->getPortfolioId($idGraphiste);
                  if ($portfolio == NULL) {
                    ?>
                    <p>Le graphiste n'a pas de portfolio.</p>
                    <a href="../controler/graphisteChoisi.controler.php?idGraph=<?php echo $idGraphiste ?>&idRequete=<?php echo $idRequete ?>"><button type="button" name="button">Choisir ce graphiste</button></a>
                    <?php
                  } else {
                    $res = $DAO->getLoginFromIdGraphiste($portfolio[0]->getId());
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
                      <a href="../controler/graphisteChoisi.controler.php?idGraph=<?php echo $idGraphiste ?>&idRequete=<?php echo $idRequete ?>"><button type="button" name="button">Choisir ce graphiste</button></a>
                    </div>
                    <?php
                  }
                }
              }
            }
          ?> </div> <?php
          }
          ?>
        </div>
    </div>
  </body>
</html>
