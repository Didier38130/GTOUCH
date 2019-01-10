<?php
session_start();
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
require_once('../model/PropositionGraphiste');
$DAO = new gtouchDAO();
global $mp;

if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {
  $email=$_SESSION["e-mail"];
<<<<<<< HEAD
  $requete="SELECT r.idRequete,r.listeId, r.dateRequete FROM compteClient c, requetesClient r WHERE c.mail='$email' and c.id=r.idClient";
=======
  $requete="SELECT r.idRequete, r.dateRequete FROM  compteClient c, requetesClient r  WHERE c.mail='$email' and c.id=r.idClient";
>>>>>>> 85b3949c619f7efca7eea20523c94909cccf6401
  $q=$DAO->db()->query($requete);
  $mp = $q->fetchAll();

  $propositions = $DAO->getPropositions();

  include("../vue/compte_client_commandes.vue.php");
}
?>
