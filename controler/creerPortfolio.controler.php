<?php
//début session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/Portfolio.class.php');
require_once('../model/gtouchDAO.class.php');
//affichage du header
include('../vue/header.view.php');
//accès à la BD
$DAO = new gtouchDAO();

//on recupère l'id du graphiste en fonction de son mail
$res = $DAO->getIdFromMailGraphiste($_SESSION['e-mail']);
$id = $res[0]->getIdUtil();
// si les champs description, competences et logiciels ne sont pas vides
if(!empty($_POST["desc"]) || !empty($_POST["comp"]) || !empty($_POST["logi"])) {
  $descriptionPerso = $_POST["desc"];
  $competences = $_POST["comp"];
  $logiciels = $_POST["logi"];
  $DAO->insertPorfolio($id, $competences, $logiciels, $descriptionPerso);
  header('Location: page_accueil.controler.php');
}

include('../vue/creerPortfolio.vue.php');


?>
