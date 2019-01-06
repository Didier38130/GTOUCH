<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();

$mail = $_SESSION['e-mail'];
$mail_dispoClient=$BDD->getInfoClient($mail);
$mail_dispoGraphiste=$BDD->getInfoGraphiste($mail);

if ($mail_dispoClient && !$mail_dispoGraphiste) {
  $res = $BDD->getIdFromMailGraphiste($_SESSION['e-mail']);
  $id = $res[0]->getIdUtil();
  $typeExp = 'graphiste';
} else if (!$mail_dispoClient && $mail_dispoGraphiste){
  $res = $BDD->getIdFromMailClient($_SESSION['e-mail']);
  $id = $res[0]->getIdUtil();
  $typeExp = 'client';
}

$idConv = $_GET['id'];

if(!empty($_POST["objet"]) && !empty($_POST["message"])) {
  $message = $_POST["message"];
  $objet = $_POST["objet"];
  $dateMessage = date('d/m/Y à H:i:s');
  if ($mail_dispoClient && !$mail_dispoGraphiste) {
    $typeExp = 'graphiste';
    $BDD->insertMessage($id, $idConv, $dateMessage, $objet, $message, $typeExp);
  } else if (!$mail_dispoClient && $mail_dispoGraphiste) {
    $typeExp = 'client';
    $BDD->insertMessage($id, $idConv, $dateMessage, $objet, $message, $typeExp);
  }
}

if ($typeExp == 'graphiste') {
  $messages = $BDD->getMessages($idConv, $id);
} else {
  $messages = $BDD->getMessages($id, $idConv);
}

include("../vue/header.view.php");
include("../vue/message.vue.php");
