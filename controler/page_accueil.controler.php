<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();

$mail = $_SESSION['e-mail'];
$mail_dispoClient=$BDD->getInfoClient($mail);
$mail_dispoGraphiste=$BDD->getInfoGraphiste($mail);

include("../vue/page_accueil.vue.php");

?>
