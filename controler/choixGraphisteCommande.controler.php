<?php
//Début de la session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
require_once('../model/RequeteClient.class.php');
require_once('../model/PropositionGraphiste.class.php');
//accès à la BD
$DAO = new gtouchDAO();

include('../vue/header.view.php');

$res = $DAO->getIdFromMailClient($_SESSION['e-mail']);
$id = $res[0]->getIdUtil();

$requetesSansGraphistes = $DAO->getRequeteSansGraphiste($id);


include('../vue/choixGraphisteCommande.vue.php');
?>
