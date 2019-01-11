<?php
//début session
session_start();
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$DAO = new gtouchDAO();
global $infos;
//Vérification de l'existance des comptes client ou graphiste grace a l'e-mail
if(!empty($_SESSION["e-mail"]) || !empty($_SESSION["mdp"])) {
  $mail = $_SESSION["e-mail"];
  $q1 = $DAO->ClientExiste($mail);
  $q2 = $DAO->GraphistetExiste($mail);
//si c'est un client alors on récupère les données de celui corespondant à l'e-mail et on utilise le header client
  if ($q1 && !$q2) {
    $requete="SELECT * FROM compteClient WHERE mail='$email'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();
    $infos=  array_unique($mp);
    header('Location: compte_client.controler.php');
    //si c'est un graphiste alors on récupère les données de celui corespondant à l'e-mail et on utilise le header graphiste
  }else{
    $requete="SELECT * FROM compteGraphiste WHERE mail='$email'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();
    $infos=  array_unique($mp);
    header('Location: compte_graphiste.controler.php');
    }
  }
  ?>
