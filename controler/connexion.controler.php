<?php

// Controleur connexion
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');


//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

$DAO = new gtouchDAO();

if(!empty($_POST["mail"]) || !empty($_POST["mdp"])) {
  $mail = $_POST["mail"];
  $requete = "SELECT mdp FROM compteClient WHERE mail='$mail'";
  $q = $DAO->db()->query($requete);
  $mp = $q->fetch();
  if(password_verify($_POST["mdp"], $mp[0])) {
    session_start();
    $_SESSION["e-mail"] = $_POST["mail"];
    header('Location: page_accueil.controler.php');
  } else {
    $message = "<label>Les informations n'ont pas permis de vous identifier</label>";
  }
}

include('../vue/connexion.vue.php');
?>
