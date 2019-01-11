<?php
//début session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/Portfolio.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$BDD = new gtouchDAO();

include('../vue/header.view.php');

//on recupère l'id du graphiste en fonction de son mail
$res = $BDD->getIdFromMailGraphiste($_SESSION['e-mail']);
$id = $res[0]->getIdUtil();
$portfolio = $BDD->getPortfolioId($id);

if(!empty($_POST["desc"]) || !empty($_POST["comp"]) || !empty($_POST["logi"])) {
  $descriptionPerso = $_POST["desc"];
  $competences = $_POST["comp"];
  $logiciels = $_POST["logi"];
  $requete  = "UPDATE portfolio SET descriptionPerso='$descriptionPerso', competences='$competences',logiMaitrises='$logiciels' WHERE idGraphiste='$id'";
  $q2=$BDD->db()->query($requete);
  header('Location: page_accueil.controler.php');
}

include('../vue/modifPortfolio.vue.php');

?>
