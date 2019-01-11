<?php
//début session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$BDD = new gtouchDAO();

if (!empty($_SESSION['e-mail'])) {
  $mail = $_SESSION['e-mail'];
  $mail_dispoClient=$BDD->getInfoClient($mail);
  $mail_dispoGraphiste=$BDD->getInfoGraphiste($mail);
}

include("../vue/page_accueil.vue.php");
?>
