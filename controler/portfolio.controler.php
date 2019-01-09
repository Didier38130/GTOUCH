<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/Portfolio.class.php');
require_once('../model/gtouchDAO.class.php');

$BDD = new gtouchDAO();

include('../vue/header.view.php');

$portfolios = $BDD->getPortfolio();

if (!empty($_SESSION['e-mail'])) {
  //on recupere le mail de la personne connectée
  $mail = $_SESSION['e-mail'];
  //on vérifie s'il existe un client dans la base de donnée qui possède ce mail (si oui, la personne connectée est un client)
  $mail_dispoClient=$BDD->getInfoClient($mail);
  //on vérifie s'il existe un graphiste dans la base de donnée qui possède ce mail (si oui, la personne connectée est un graphiste)
  $mail_dispoGraphiste=$BDD->getInfoGraphiste($mail);

  //si la personne connectée est un graphiste
  if ($mail_dispoClient && !$mail_dispoGraphiste) {
    //on recupère l'id du graphiste en fonction de son mail
    $res = $BDD->getIdFromMailGraphiste($_SESSION['e-mail']);
    $id = $res[0]->getIdUtil();
    //on vérifie si le graphiste a déjà un portfolio
    $portfolio = $BDD->getUtilIdPortfolio($id);
    if ($portfolio == NULL) {
      ?>
        <h3>Vous n'avez pas de portfolio</h3>
        <a href="../controler/creerPortfolio.controler.php"><h4>Cliquez ici pour vous en créer un</h4></a>
      <?php
    } else {
      include('../vue/portfolio.vue.php');
    }
  } else {
      include('../vue/portfolio.vue.php');
  }
} else {
  include('../vue/portfolio.vue.php');
}




 ?>
