<?php
session_start();
require_once('../model/Compte.class.php');
require_once('../model/RequeteClient.class.php');
require_once('../model/gtouchDAO.class.php');

$DAO = new gtouchDAO();
// si l'utilisateur est connecté on récupère ses infos
if (isset($_SESSION['e-mail'])) {
  $mail = $_SESSION['e-mail'];
  $res = $DAO->getIdFromMailGraphiste($_SESSION['e-mail']);
  $idGraphiste = $res[0]->getIdUtil();
}
// on récupère ses commandes en cours
$commandesEnCours = $DAO->getRequetesEnCoursGraphiste($idGraphiste);
// on récupère ses commandes en terminées
$commandesTerminees = $DAO->getRequetesTermineesGraphiste($idGraphiste);
// on inclut la vue qui affiche les projets du graphiste
include('../vue/header.view.php');
include('../vue/mesProjets.vue.php');


?>
