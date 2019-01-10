<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/Portfolio.class.php');
require_once('../model/gtouchDAO.class.php');

include('../vue/header.view.php');

$DAO = new gtouchDAO();

//on recupère l'id du graphiste en fonction de son mail
$res = $DAO->getIdFromMailGraphiste($_SESSION['e-mail']);
$id = $res[0]->getIdUtil();

if(!empty($_POST["desc"]) || !empty($_POST["comp"]) || !empty($_POST["logi"])) {
  $descriptionPerso = $_POST["desc"];
  $competences = $_POST["comp"];
  $logiciels = $_POST["logi"];
  $DAO->insertPorfolio($id, $competences, $logiciels, $descriptionPerso);
  header('Location: page_accueil.controler.php');
}

include('../vue/creerPortfolio.vue.php');


?>
