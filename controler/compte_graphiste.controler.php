<?php
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$DAO = new gtouchDAO();
global $infos;

if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {

  $mail=$_SESSION["e-mail"];
  $q=$DAO->getInfoGraphiste($mail);
  $infos=  array_unique($q);

  if(isset($_POST['enregistrer'])){
    $login= $_POST['login'];
    $mdp= $_POST['mdp'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $mail= $_POST['mail'];
    $sexe= $_POST['sexe'];
    $telephone= $_POST['telephone'];
    $adresse= $_POST['adresse'];

    $requete  = "UPDATE compteGraphiste SET login='$login', mdp='$mdp',nom='$nom',prenom='$prenom',mail='$mail',
    sexe='$sexe',telephone='$telephone',adresse='$adresse' WHERE mail='$mail'";
    $q2=$DAO->db()->query($requete);


    $q3=$DAO->getInformationsGraphiste($mail);
    $infos=  array_unique($q3);

  }
  include ("../vue/compte_graphiste.vue.php");
}

?>
