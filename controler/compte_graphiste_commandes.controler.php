<?php
//début session
session_start();
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$DAO = new gtouchDAO();
global $mp;
//récupération de l'id, le login client et la date d'une annonce correspondant à un client grâce à son mail et l'id du graphiste s'occupant de cette anonce
if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {
$email=$_SESSION["e-mail"];
$requete="SELECT r.idRequete,r.loginClient, r.dateRequete FROM compteGraphiste c, requetesClient r WHERE c.mail='$email' and c.id=r.idGraphiste";
$q=$DAO->db()->query($requete);
$mp = $q->fetchAll();
//affichage de la vue compte graphiste / commande traitées actuellement
include("../vue/compte_graphiste_commandes.vue.php");
}
?>
