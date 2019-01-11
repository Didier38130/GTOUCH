<?php
//Début de la session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
require_once('../model/RequeteClient.class.php');
require_once('../model/PropositionGraphiste.class.php');
//accès à la BD
$DAO = new gtouchDAO();
//affichage du header
include('../vue/header.view.php');
//récupération de l'id client pour créer une requête qui récupère les informations d'une commande sans graphiste
$res = $DAO->getIdFromMailClient($_SESSION['e-mail']);
$id = $res[0]->getIdUtil();

$requetesSansGraphistes = $DAO->getRequeteSansGraphiste($id);

//affichage de la vue du choix de graphiste
include('../vue/choixGraphisteCommande.vue.php');
?>
