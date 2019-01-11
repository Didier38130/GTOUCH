<?php
//début session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$BDD = new gtouchDAO();

//on recupere le mail de la personne connectée
$mail = $_SESSION['e-mail'];
//on vérifie s'il existe un client dans la base de donnée qui possède ce mail (si oui, la personne connectée est un client)
$mail_dispoClient=$BDD->getInfoClient($mail);
//on vérifie s'il existe un graphiste dans la base de donnée qui possède ce mail (si oui, la personne connectée est un graphiste)
$mail_dispoGraphiste=$BDD->getInfoGraphiste($mail);

//si la personne connectée est un graphiste
if ($mail_dispoClient && !$mail_dispoGraphiste) {
  //on recupère l'id du graphiste en fonction de son mail
  $res = $BDD->getIdFromMailGraphiste($_SESSION['e-mail']);
  $id = $res[0]->getIdUtil();
  //l'expediteur sera forcement un graphiste
  $typeExp = 'graphiste';
  //on recupere les id de toutes les personnes avec qui le graphiste a eu une conversatin
  $convs = $BDD->getIdConvsFromIdGraphiste($id);
//ou si la personne connectée est un client
} else if (!$mail_dispoClient && $mail_dispoGraphiste){
  //on recupère l'id du client en fonction de son mail
  $res = $BDD->getIdFromMailClient($_SESSION['e-mail']);
  $id = $res[0]->getIdUtil();
  //l'expediteur sera forcement un client
  $typeExp = 'client';
  //on recupere les id de toutes les personnes avec qui le client a eu une conversatin
  $convs = $BDD->getIdConvsFromIdClient($id);
}

if(!empty($_POST["login"]) && !empty($_POST["objet"]) && !empty($_POST["message"])) {
  $message = $_POST["message"];
  $objet = $_POST["objet"];
  $dateMessage = date('Y:m:d H:i:s');
  $resClient = $BDD->getInfoClientLogin($_POST['login']);
  $resGraphiste = $BDD->getInfoGraphisteLogin($_POST['login']);
  //si il n'y a aucune personne dans la base de donnée qui possède le login rentré (ni dans les graphistes, ni dans les clients)
  if ($resClient && $resGraphiste) {
    echo "<p>Le login n'existe pas, veuillez rentrer un login correct !</p>";
  }
  else {
    //si la personne connectée est un client et que login rentré est utilisé par un client
    if ($typeExp == 'client' && !$resClient) {
      echo "<p>Vous ne pouvez pas envoyez de message à un autre client, saisissez un autre login ! </p>";
    //si la personne connectée est un graphiste et que le login rentré est utilisé par un graphiste
    } else if ($typeExp == 'graphiste' && !$resGraphiste) {
      echo "<p>Vous ne pouvez pas envoyez de message à un autre graphiste, saisissez un autre login !</p>";
    //si tout est ok
    } else {
      //si la personne connectée est un graphiste
      if ($typeExp == 'graphiste') {
        //on recupere l'id du login client a qui le graphiste veut envoyer un message
        $log = $BDD->getIdFromLoginClient($_POST['login']);
        $idDest = $log[0]->getIdUtil();
        //on insert le message dans la base de donnée avec les bons paramètres
        $BDD->insertMessage($id, $idDest, $dateMessage, $objet, $message, $typeExp);
        header('Location: messagerie.controler.php');
      }
      //si la personne connectée est un client
      else if ($typeExp == 'client') {
        //on recupere l'id du login graphiste a qui le client veut envoyer un message
        $log = $BDD->getIdFromLoginGraphiste($_POST['login']);
        $idDest = $log[0]->getIdUtil();
        //on insert le message dans la base de donnée avec les bons paramètres
        $BDD->insertMessage($id, $idDest, $dateMessage, $objet, $message, $typeExp);
        header('Location: messagerie.controler.php');
      }
    }
  }
}

include("../vue/header.view.php");
include("../vue/messagerie.vue.php");
?>
