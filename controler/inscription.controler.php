<?php
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();
$nbErr = 0;


$login = $_POST['login'];
$mdp = md5($_POST['mdp']);
$mdpConfirm = md5($_POST['mdpConfirm']);
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail = $_POST['e-mail'];
$sexe = $_POST['sexe'];
$telephone=$_POST['telephone'];
$adresse=$_POST['adresse'];

/*if(isset($_POST['portfolio'])){
$portfolio=$_POST['portfolio'];
}*/
$listErr = array();

//Vérification du mail mon_compte

$mail_dispo=$BDD->getInfoMembre($mail);

if(!$mail_dispo)
{
    array_push($listErr, "Votre mail est déjà utilisé par un membre");
    $nbErr++;
}
if(empty($mail))
{
    array_push($listErr, "Le champ e-mail est vide");
    $nbErr++;
}
if (empty($login))
 {
    array_push($listErr, "Le champ login est vide");
     $nbErr++;
}
//Vérification du mdp

if ($mdp != $mdpConfirm || empty($mdpConfirm) || empty($mdp))
{
    array_push($listErr, "Votre mot de Mot de passe est différent du mot de passe de confirmation");
    $nbErr++;
}
if ($nbErr==0){
  //if(!isset($_POST['portfolio'])){
      echo"compte client";
     $BDD->insertClient($login,$mdp,$prenom,$nom,$mail,$sexe,$telephone,$adresse);
     $_SESSION['e-mail'] = $mail;
     include('../vue/inscriptionOk.vue.php');
  //}
  //else{
    //echo"compte Graphiste";
    //$BDD->insertGraphiste($login,$mdp,$prenom,$nom,$mail,$sexe,$telephone,$adresse,$portfolio);
    //$_SESSION['e-mail'] = $mail;
    //include('../vue/inscriptionOk.vue.php');
  }
 //}
 else
 {
  include("../vue/erreurInscription.vue.php");
 }

 ?>
