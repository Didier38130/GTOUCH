<?php
//début session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();

//on recupere le mail de la personne connectée
$mail = $_SESSION['e-mail'];
//on vérifie s'il existe un client dans la base de donnée qui possède ce mail (si return false, la personne connectée est un client)
$mail_dispoClient=$BDD->getInfoClient($mail);
//on vérifie s'il existe un graphiste dans la base de donnée qui possède ce mail (si return false, la personne connectée est un graphiste)
$mail_dispoGraphiste=$BDD->getInfoGraphiste($mail);

//si la personne connectée est un graphiste
if ($mail_dispoClient && !$mail_dispoGraphiste) {
  //on recupère l'id du graphiste en fonction de son mail
  $res = $BDD->getIdFromMailGraphiste($_SESSION['e-mail']);
  $id = $res[0]->getIdUtil();
  $typeExp = 'graphiste';
//ou si la personne connectée est un client
} else if (!$mail_dispoClient && $mail_dispoGraphiste){
  //on recupère l'id du client en fonction de son mail
  $res = $BDD->getIdFromMailClient($_SESSION['e-mail']);
  $id = $res[0]->getIdUtil();
  $typeExp = 'client';
}

//on recupère l'id (donnée par le controler messagerie.controler.php) de la personne avec qui la personne connectée échange des messages
$idConv = $_GET['id'];

if(!empty($_POST["objet"]) && !empty($_POST["message"])) {
  $message = $_POST["message"];
  $objet = $_POST["objet"];
  $dateMessage = date('d/m/Y à H:i:s');
  //si la personne connectée est un graphiste
  if ($typeExp == 'graphiste') {
    //on insert le message dans la base de donnée avec les bons paramètres
    $BDD->insertMessage($id, $idConv, $dateMessage, $objet, $message, $typeExp);
  //si c'est un client
  } else if ($typeExp == 'client') {
    //on insert le message dans la base de donnée avec les bons paramètres
    $BDD->insertMessage($id, $idConv, $dateMessage, $objet, $message, $typeExp);
  }
}

//si la personne connectée est un gaphiste
if ($typeExp == 'graphiste') {
  //on recupère tous les messages avec pour id (d'expediteur ou de destinataire) l'id de la personne connectée et de la personne avec qui elle échange des messages
  $messages = $BDD->getMessages($idConv, $id);
//si la personne connectée est un client
} else {
  //meme chose mais inversé car requete sql doit etre inversée
  $messages = $BDD->getMessages($id, $idConv);
}

include("../vue/header.view.php");
include("../vue/message.vue.php");
