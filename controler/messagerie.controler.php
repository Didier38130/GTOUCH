<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();

$res = $BDD->getUtilFromMail($_SESSION['e-mail']);
$id = $res->getIdUtil();

if(!empty($_POST["login"]) && !empty($_POST["objet"]) && !empty($_POST["message"])) {
  $message = $_POST["message"];
  $log = $BDD->getUtilFromLogin($_POST['login']);
  $idDest = $log->getIdUtil();
  $objet = $_POST["objet"];
  $dateMessage = date('Y:m:d H:i:s');
  $BDD->insertMessage($id, $idDest, $dateMessage, $objet, $message);
}

$messages = $BDD->getMessageFromIdClient($id);

$convs = $BDD->getIdConvsFromIdClient($id);


include("../vue/messagerie.vue.php");
?>
