<?php
//début session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$BDD = new gtouchDAO();
// si l'utilisateur est connecté
if (!empty($_SESSION['e-mail'])) {
  $mail = $_SESSION['e-mail']; // on enregistre son mail
  $mail_dispoClient=$BDD->getInfoClient($mail); // on enregistre les infos en tant que client pour ce mail
  $mail_dispoGraphiste=$BDD->getInfoGraphiste($mail); // on enregistre les infos en tant que graphiste pour ce mail
  // -> pour adapter le header si l'utilisateur est un graphiste ou un client
}
// on charge la vue qui affiche la page d'accueil
include("../vue/page_accueil.vue.php");
?>
