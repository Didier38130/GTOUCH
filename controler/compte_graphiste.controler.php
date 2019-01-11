<?php
//début session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$DAO = new gtouchDAO();
global $infos;
//infos prend les données du compte graphiste correspondant à l'e-mail
if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {

  $mail=$_SESSION["e-mail"];
  $q=$DAO->getInformationsGraphiste($mail);
  $infos=array_unique($q);
//récupération des nouvelles données du graphiste
  if(isset($_POST['enregistrer'])){
    $login= $_POST['login'];
    $mdp= password_hash($_POST['mdp'],PASSWORD_DEFAULT);
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $mail= $_POST['mail'];
    $sexe= $_POST['sexe'];
    $telephone= $_POST['telephone'];
    $adresse= $_POST['adresse'];
//mise à jour des données du graphiste grâce à celle précédement récupérées
    $requete  = "UPDATE compteGraphiste SET login='$login', mdp='$mdp', nom='$nom', prenom='$prenom',mail='$mail',
    sexe='$sexe',telephone='$telephone',adresse='$adresse' WHERE mail='$mail'";
    $q2=$DAO->db()->query($requete);


    $q3=$DAO->getInformationsGraphiste($mail);
    $infos=  array_unique($q3);

  }
  //affichage de la vue compte graphiste / informations
  include ("../vue/compte_graphiste.vue.php");
}

?>
