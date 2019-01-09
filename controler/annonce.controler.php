<?php
require_once('../model/RequeteClient.class.php');
require_once('../model/ServicesDispo.class.php');
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
date_default_timezone_set('UTC');
session_start();
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
  $DAO = new gtouchDAO();
  $requete = $DAO->getRequeteFromId($_SESSION['idRequ']);
}
$dateProposition = date("j/m/Y");
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les DAOcorrespondantes
if ((isset($accepte) && $accepte != '')) {
  include('../vue/propositionAcceptee.vue.php');
} else {
  include('../vue/annonce.vue.php');
}

?>
