<?php
session_start();
require_once('../model/Compte.class.php');
require_once('../model/RequeteClient.class.php');
require_once('../model/gtouchDAO.class.php');
require_once('../model/ServicesDispo.class.php');

$DAO = new gtouchDAO();

if (isset($_SESSION['e-mail'])) {
  $mail = $_SESSION['e-mail'];
  $res = $DAO->getIdFromMailGraphiste($_SESSION['e-mail']);
  $idGraphiste = $res[0]->getIdUtil();
}

$commandesTerminees = $DAO->getRequetesTermineesGraphiste($idGraphiste);

include('../vue/header.view.php');
include('../vue/mesProjetsTerminees.vue.php');
