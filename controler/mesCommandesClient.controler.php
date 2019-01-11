<?php
session_start();
require_once('../model/Compte.class.php');
require_once('../model/RequeteClient.class.php');
require_once('../model/gtouchDAO.class.php');

$DAO = new gtouchDAO();
// si l'utilisateur est connecté on récupère ses infos
if (isset($_SESSION['e-mail'])) {
  $mail = $_SESSION['e-mail'];
  $res = $DAO->getIdFromMailClient($_SESSION['e-mail']);
  $idClient = $res[0]->getIdUtil();
}
// on récupère ses commandes en cours
$commandesEnCours = $DAO->getRequetesEnCoursClient($idClient);
// on récupère ses commandes en terminées
$commandesTerminees = $DAO->getRequetesTermineesClient($idClient);

// on inclut la vue qui affiche les commandes d'un client
include('../vue/header.view.php');
include('../vue/mesCommandesClient.vue.php');


?>
