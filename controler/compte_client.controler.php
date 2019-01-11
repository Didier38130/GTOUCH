<?php
//début session
session_start();

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$DAO = new gtouchDAO();
global $infos;

if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {
  //on récupère les informations du client selon son mail
  $mail=$_SESSION["e-mail"];
  $q=$DAO->getInformationsClient($mail);
  $infos=  array_unique($q);
//Récupération des nouvelles données client
  if(isset($_POST['enregistrer'])){
    $login= $_POST['login'];
    $mdp= password_hash($_POST['mdp'],PASSWORD_DEFAULT);
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $mail= $_POST['mail'];
    $sexe= $_POST['sexe'];
    $telephone= $_POST['telephone'];
    $adresse= $_POST['adresse'];
//Mise à jour des données du compte client dans la base de données avec ses nouvelles données récupérées précédement
    $requete  = "UPDATE compteClient SET login='$login',mdp='$mdp',nom='$nom',prenom='$prenom',mail='$mail',
    sexe='$sexe',telephone='$telephone',adresse='$adresse' WHERE mail='$mail'";
    $q2=$DAO->db()->query($requete);


    $q3=$DAO->getInformationsClient($mail);
    $infos=  array_unique($q3);

  }
  //affichage de la vue compte client/ informations
  include ("../vue/compte_client.vue.php");
}

?>
