<?php

// Controleur connexion
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');


//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

$DAO = new gtouchDAO();

$mail = $_POST["mail"];

if(!empty($_POST["mail"]) || !empty($_POST["mdp"])) {
  $compteCo = $DAO->getCompteConnexion($_POST["mail"], $_POST["mdp"]);
  if(($compteCo != NULL) && ($compteCo->getMailUtil() == $_POST["mail"])) {
    session_start();
    $_SESSION["e-mail"] = $mail;
    header('Location: page_accueil.controler.php');
  } else {
    $message = "<label>Les informations n'ont pas permis de vous identifier</label>";
    echo 'Les informations n\'ont pas permis de vous identifier';
  }
}

include('../vue/connexion.vue.php');
?>
