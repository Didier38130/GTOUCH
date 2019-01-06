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
  $convs = $BDD->getIdConvsFromIdGraphiste($id);
} else if (!$mail_dispoClient && $mail_dispoGraphiste){
  $res = $BDD->getIdFromMailClient($_SESSION['e-mail']);
  $id = $res[0]->getIdUtil();
  $typeExp = 'client';
  $convs = $BDD->getIdConvsFromIdClient($id);
}


if(!empty($_POST["login"]) && !empty($_POST["objet"]) && !empty($_POST["message"])) {
  $message = $_POST["message"];
  $objet = $_POST["objet"];
  $dateMessage = date('Y:m:d H:i:s');
  $resClient = $BDD->getInfoClientLogin($_POST['login']);
  $resGraphiste = $BDD->getInfoGraphisteLogin($_POST['login']);
  if ($resClient && $resGraphiste) {
    echo "<p>le login n'existe pas</p>";
  }
  else { 
    if ($typeExp == 'client' && !$resClient) {
      echo "<p>vous ne pouvez pas envoyez de message à un autre client</p>";
    } else if ($typeExp == 'graphiste' && !$resGraphiste) {
      echo "<p>vous ne pouvez pas envoyez de message à un autre graphiste</p>";
    } else {
      if ($mail_dispoClient && !$mail_dispoGraphiste) {
        $log = $BDD->getIdFromLoginClient($_POST['login']);
        $idDest = $log[0]->getIdUtil();
        $BDD->insertMessage($id, $idDest, $dateMessage, $objet, $message, $typeExp);
      }
      else if (!$mail_dispoClient && $mail_dispoGraphiste) {
        $log = $BDD->getIdFromLoginGraphiste($_POST['login']);
        $idDest = $log[0]->getIdUtil();
        $BDD->insertMessage($id, $idDest, $dateMessage, $objet, $message, $typeExp);
      }
    }
  }
}

include("../vue/header.view.php");
include("../vue/messagerie.vue.php");
?>
