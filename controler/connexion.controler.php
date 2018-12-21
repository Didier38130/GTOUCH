<?php
// Controleur connexion
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');


//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

//$config = parse_ini_file('../config/config.ini');
$bdd = new gtouchDAO();

if(empty($_POST["mail"]) || empty($_POST["mdp"])) {
  $message = '<label>Tous les champs sont requis</label>';
} else {
  $membreCo = $bdd->getMembreConnexion($_POST["mail"], $_POST["mdp"]);
  if(($membreCo != NULL) && ($membreCo->getMail() == $_POST["mail"])) {
    echo 'connecté';
    session_start();
    $_SESSION["newsession"] = $_POST["mail"];
    header('Location: ../index.php');
  } else {
    $message = "<label>Les informations n'ont pas permis de vous identifier</label>";
  }
}

include('../vue/connexion.vue.php');
?>
