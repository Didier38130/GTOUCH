<?php
session_start();
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$DAO = new gtouchDAO();
global $mp;

if (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) {
$email=$_SESSION["e-mail"];
$requete="SELECT distinct r.idRequete,r.listeId,r.descripRequete,r.dateRequete FROM compteClient c, requetesClient r WHERE mail='jackson@' and r.idClient=c.id";
$q=$DAO->db()->query($requete);
$mp = $q->fetchAll();
include("../vue/compte_client_commandes.vue.php");
}
?>
