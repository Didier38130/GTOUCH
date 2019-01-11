<?php


require_once('../model/RequeteClient.class.php');
require_once('../model/gtouchDAO.class.php');
session_start();

$DAO = new gtouchDAO();

global $idRequete;
$idRequete = $_GET['idRequete'];

//si on clique sur submit
if (isset($_POST['Submit1'])) {
  $etat = $_POST['etat'];
  //on met à jour l'état de la commande à zéro
  if ($etat == 'zero') {
    $requete  = "UPDATE requetesClient SET etatRequete='$etat' WHERE idRequete=1";
    $q2=$DAO->db()->query($requete);
    header('Location:../controler/page_accueil.controler.php');
  }
    //on met à jour l'état de la commande à encours
  else if ($etat == 'encours') {
    $requete  = "UPDATE requetesClient SET etatRequete='$etat' WHERE idRequete=1";
    $q2=$DAO->db()->query($requete);
    header('Location:../controler/page_accueil.controler.php');
  }
    //on met à jour l'état de la commande à l'état indiqué
  else {
    $requete  = "UPDATE requetesClient SET etatRequete='$etat' WHERE idRequete=1";
    $q2=$DAO->db()->query($requete);
    header('Location:../controler/page_accueil.controler.php');
  }
}





include('../vue/header.view.php');
include('../vue/modifEtatCommande.vue.php');
?>
