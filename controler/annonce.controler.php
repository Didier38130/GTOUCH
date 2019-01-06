<?php
require_once('../model/RequeteClient.class.php');
require_once('../model/ServiceDispo.class.php');
require_once('../model/gtouchDAO.class.php');
//////////////////////////////////////////////////////////////////////////////
// PARTIE RECUPERATION DES DONNEES
//////////////////////////////////////////////////////////////////////////////

// Récupération des informations de la query string
if (isset($_GET['idReq'])) {
  $idReq = $_GET['idReq'];
} else {
  $idReq = '';
}

if (isset($idReq) && $idReq != '') {
  $DAO = new gtouchDAO();
  $requete = $DAO->getRequeteFromId($idReq);
}

//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DE LA VUE
//////////////////////////////////////////////////////////////////////////////
//On charge la vue avec les DAOcorrespondantes
include('../vue/annonce.vue.php');
?>
