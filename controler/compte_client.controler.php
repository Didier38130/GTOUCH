<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$DAO = new gtouchDAO();
global $infos;

if (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) {

  $email=$_SESSION["e-mail"];
  $requete="SELECT * FROM compteClient WHERE mail='$email'";
  $q=$DAO->db()->query($requete);
  $mp = $q->fetch();
  $infos=  array_unique($mp);

    if( isset($_POST['enregistrer'])){

      $login= $_POST['login'];
      $mdp= $_POST['mdp'];
      $nom= $_POST['nom'];
      $prenom= $_POST['prenom'];
      $mail= $_POST['mail'];
      $sexe= $_POST['sexe'];
      $telephone= $_POST['telephone'];
      $adresse= $_POST['adresse'];

      $requete  = "UPDATE compteClient SET login='$login', mdp='$mdp',nom='$nom',prenom='$prenom',mail='$mail',
      sexe='$sexe',telephone='$telephone' WHERE mail='$mail'";
      $q=$DAO->db()->query($requete);
      $mp = $q->fetch();
  }
  include ("../vue/compte_client.vue.php");

/*
  if( isset($_POST['login'])){
    $login= $_POST['login'];
    $requete  = "UPDATE compteClient SET login=$login WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();
    $infos=  array_unique($mp);

  }
  if( isset($_POST['mdp'])){
    $mdp= $_POST['mail'];
    $requete  = "UPDATE compteClient SET mdp=$mdp WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();
    $infos=  array_unique($mp);

  }

  if( isset($_POST['nom'])){
    $nom= $_POST['nom'];
    $requete  = "UPDATE compteClient SET nom=$nom WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();
    $infos=  array_unique($mp);

  }

  if( isset($_POST['prenom'])){
    $prenom= $_POST['prenom'];
    $requete  = "UPDATE compteClient SET prenom=$prenom WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();
    $infos=  array_unique($mp);

  }
  if( isset($_POST['mail'])){
    $mail= $_POST['mail'];
    $requete  = "UPDATE compteClient SET mail=$mail WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();
    $infos=  array_unique($mp);

  }
  if( isset($_POST['sexe'])){
    $sexe= $_POST['sexe'];
    $requete  = "UPDATE compteClient SET sexe=$sexe WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();


  }

  if( isset($_POST['telephone'])){
    $telephone= $_POST['telephone'];
    $requete  = "UPDATE compteClient SET telephone='$telephone' WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();

  }
  if( isset($_POST['adresse'])){
    $adresse= $_POST['adresse'];
    $requete  = "UPDATE compteClient SET adresse=$adresse WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp2 = $q->fetch();
    $infos=  array_unique($mp);
  }
*/
}
?>
