<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();

$res = $BDD->getIdFromMail($_SESSION['e-mail']);
$id = $res[0]->getIdUtil();

if(!empty($_POST["login"]) && !empty($_POST["objet"]) && !empty($_POST["message"])) {
  $message = $_POST["message"];
  $log = $BDD->getIdFromLogin($_POST['login']);
  $idDest = $log[0]->getIdUtil();
  $objet = $_POST["objet"];
  $dateMessage = date('Y:m:d H:i:s');
  $BDD->insertMessage($id, $idDest, $dateMessage, $objet, $message);
}

$messages = $BDD->getMessageFromIdClient($id);

$convs = $BDD->getIdConvsFromIdClient($id);


include("../vue/messagerie.vue.php");
?>
