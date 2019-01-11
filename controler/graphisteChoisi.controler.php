<?php
session_start();

require_once('../model/gtouchDAO.class.php');
require_once('../model/RequeteClient.class.php');

$DAO = new gtouchDAO();

if (isset($_GET['idGraph']) && isset($_GET['idRequete'])) {
  $idGraphiste = $_GET['idGraph'];
  $idRequete = $_GET['idRequete'];
  $requete  = "UPDATE requetesClient SET idGraphiste='$idGraphiste' WHERE idRequete='$idRequete'";
  $q2=$DAO->db()->query($requete);
  header('Location: choixGraphisteCommande.controler.php');
}

?>
