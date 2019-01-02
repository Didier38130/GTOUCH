<?php

// Controleur connexion
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');


//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////

$DAO = new gtouchDAO();

/*
if(!empty($_POST["mail"]) || !empty($_POST["mdp"])) {
$mail = $_POST["mail"];
$requete = "SELECT mdp FROM compteClient WHERE mail='$mail'";
$q = $DAO->db()->query($requete);
$mp = $q->fetch();
if(password_verify($_POST["mdp"], $mp[0])) {
session_start();
$_SESSION["e-mail"] = $_POST["mail"];
$_SESSION["mdp"] = $_POST["mdp"];
header('Location: mon_compte_commandes.controler.php');
} else {
$message = "<label>Les informations n'ont pas permis de vous identifier</label>";
echo 'Les informations n\'ont pas permis de vous identifier';
}
}

include('../vue/connexion.vue.php');
*/
if(!empty($_POST["mail"]) || !empty($_POST["mdp"])) {
  $mail = $_POST["mail"];
  $q1 = $DAO->ClientExiste($mail);
  $q2 = $DAO->GraphistetExiste($mail);

  if ($q1 && !$q2) {
    $requete = "SELECT mdp FROM compteClient WHERE mail='$mail'";
    $q = $DAO->db()->query($requete);
    $mp = $q->fetch();
    if(password_verify($_POST["mdp"], $mp[0])) {
      session_start();
      $_SESSION["e-mail"] = $_POST["mail"];
      $_SESSION["mdp"] = $_POST["mdp"];
      header('Location: compte_client.controler.php');
    }else{
      echo 'Les informations n\'ont pas permis de vous identifier';
    }

  } else  if (!$q1 && $q2)  {
    $requete = "SELECT mdp FROM compteGraphiste WHERE mail='$mail'";
    $q = $DAO->db()->query($requete);
    $mp = $q->fetch();
    if(password_verify($_POST["mdp"], $mp[0])) {
      session_start();
      $_SESSION["e-mail"] = $_POST["mail"];
      $_SESSION["mdp"] = $_POST["mdp"];
      header('Location: compte_graphiste.controler.php');
    }else{
      echo 'Les informations n\'ont pas permis de vous identifier';
    }
  }else {
    echo 'Votre login est inconnu.Veuillez vous inscrire';
  }
}
include('../vue/connexion.vue.php');
?>
