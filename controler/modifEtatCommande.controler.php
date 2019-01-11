<?php


require_once('../model/RequeteClient.class.php');
require_once('../model/gtouchDAO.class.php');
session_start();

$DAO = new gtouchDAO();

global $idRequete;
$idRequete = $_GET['idRequete'];

if (isset($_POST['Submit1'])) {
  $etat = $_POST['etat'];
  if ($etat == 'zero') {
    $requete  = "UPDATE requetesClient SET etatRequete='$etat' WHERE idRequete=1";
    $q2=$DAO->db()->query($requete);
    header('Location:../controler/page_accueil.controler.php');
  }
  else if ($etat == 'encours') {
    $requete  = "UPDATE requetesClient SET etatRequete='$etat' WHERE idRequete=1";
    $q2=$DAO->db()->query($requete);
    header('Location:../controler/page_accueil.controler.php');
  }
  else {
    $requete  = "UPDATE requetesClient SET etatRequete='$etat' WHERE idRequete=1";
    $q2=$DAO->db()->query($requete);
    header('Location:../controler/page_accueil.controler.php');
  }
}





include('../vue/header.view.php');
include('../vue/modifEtatCommande.vue.php');
?>
