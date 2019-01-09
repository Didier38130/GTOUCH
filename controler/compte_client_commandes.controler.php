<?php
session_start();
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$DAO = new gtouchDAO();
global $mp;

if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {
  $email=$_SESSION["e-mail"];
  $requete="SELECT r.idRequete,r.listeId, r.dateRequete FROM  compteClient c, requetesClient r  WHERE c.mail='$email' and c.id=r.idClient";
  $q=$DAO->db()->query($requete);
  $mp = $q->fetchAll();
  include("../vue/compte_client_commandes.vue.php");
}
?>
