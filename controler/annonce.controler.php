<?php
require_once('../model/RequeteClient.class.php');
require_once('../model/ServicesDispo.class.php');
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
date_default_timezone_set('UTC');
//début session
session_start();
//accès à la BD
$DAO = new gtouchDAO();
//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////

// Récupération des informations de la query string
if (isset($_GET['Accepter'])) {
  $accepte = $_GET['Accepter'];
} else {
  $accepte = '';
}

if (isset($_GET['idReq'])) {
  $_SESSION['idRequ'] = $_GET['idReq'];
}

if (isset($_SESSION['idRequ']) && $_SESSION['idRequ'] != '') {
  $requete = $DAO->getRequeteFromId($_SESSION['idRequ']);
}
$dateProposition = date("j/m/Y");
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les DAOcorrespondantes
//affichage du header
include('../vue/header.view.php');

if ((isset($accepte) && $accepte != '')) {
  include('../vue/propositionAcceptee.vue.php');
} else {
  include('../vue/annonce.vue.php');
}

?>
