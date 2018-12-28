<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();

$res = $BDD->getIdFromMail($_SESSION['e-mail']);
$id = $res[0]->getIdUtil();
$idConv = $_GET['id'];

if(!empty($_POST["objet"]) && !empty($_POST["message"])) {
  $message = $_POST["message"];
  $objet = $_POST["objet"];
  $dateMessage = date('d/m/Y à H:i:s');
  $BDD->insertMessage($id, $idConv, $dateMessage, $objet, $message);
}


$messages = $BDD->getMessages($id, $idConv);

include("../vue/message.vue.php");
