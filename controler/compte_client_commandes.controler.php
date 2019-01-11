<?php
//début session
session_start();
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
require_once('../model/PropositionGraphiste.class.php');
//accès à la BD
$DAO = new gtouchDAO();
global $mp;
//Récupération de l'id d'une annonce d'un client grace à son mail
if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {
  $email=$_SESSION["e-mail"];
  $requete="SELECT r.idRequete FROM  compteClient c, requetesClient r  WHERE c.mail='$email' and c.id=r.idClient";
  $q=$DAO->db()->query($requete);
  $mp = $q->fetchAll();

  $propositions = $DAO->getPropositions();
//affichage de la vue compte client/commande en cours
  include("../vue/compte_client_commandes.vue.php");
}
?>
