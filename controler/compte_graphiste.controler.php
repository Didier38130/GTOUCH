<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$DAO = new gtouchDAO();
if (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) {

  $email=$_SESSION["e-mail"];
  $requete="SELECT * FROM compteGraphiste WHERE mail='$email'";
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

    $requete  = "UPDATE compteGraphiste SET login='$login', mdp='$mdp',nom='$nom',prenom='$prenom',mail='$mail',
    sexe='$sexe',telephone='$telephone' WHERE mail='$mail'";
    $q=$DAO->db()->query($requete);
    $mp = $q->fetch();
  }

  include ("../vue/compte_graphiste.vue.php");
}
?>
