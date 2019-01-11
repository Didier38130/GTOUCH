<?php
//début session
session_start();

require_once('../model/gtouchDAO.class.php');
require_once('../model/RequeteClient.class.php');
//accès a la BD
$DAO = new gtouchDAO();

//si idGraph et idRequete existe on modifie la commande avec l'id du nouveau graphiste en charge
if (isset($_GET['idGraph']) && isset($_GET['idRequete'])) {
  $idGraphiste = $_GET['idGraph'];
  $idRequete = $_GET['idRequete'];
  $requete  = "UPDATE requetesClient SET idGraphiste='$idGraphiste' WHERE idRequete='$idRequete'";
  $q2=$DAO->db()->query($requete);
  header('Location: choixGraphisteCommande.controler.php');
}

?>
