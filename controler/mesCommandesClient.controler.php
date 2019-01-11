<?php
session_start();
require_once('../model/Compte.class.php');
require_once('../model/RequeteClient.class.php');
require_once('../model/gtouchDAO.class.php');

$DAO = new gtouchDAO();

if (isset($_SESSION['e-mail'])) {
  $mail = $_SESSION['e-mail'];
  $res = $DAO->getIdFromMailClient($_SESSION['e-mail']);
  $idClient = $res[0]->getIdUtil();
}

$commandesEnCours = $DAO->getRequetesEnCoursClient($idClient);
$commandesTerminees = $DAO->getRequetesTermineesClient($idClient);

include('../vue/header.view.php');
include('../vue/mesCommandesClient.vue.php');


?>
