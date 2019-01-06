<?php

require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();
$nbErr = 0;


$login = $_POST['login'];
$mdp = $_POST['mdp'];
$mdphash = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
$mdpConfirm = $_POST['mdpConfirm'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail = $_POST['e-mail'];
$sexe = $_POST['sexe'];
$telephone=$_POST['telephone'];
$adresse=$_POST['adresse'];
$mail_dispoGraphiste=$BDD->getInfoGraphiste($mail);
$mail_dispoClient=$BDD->getInfoClient($mail);

if(isset($_POST['portfolio'])){
  $portfolio=$_POST['portfolio'];
}

$listErr = array();

//Vérification du mail mon_compte

if(!$mail_dispoGraphiste || !$mail_dispoClient)
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
  if(!isset($_POST['portfolio'])){
     $BDD->insertClient($login,$mdphash,$prenom,$nom,$mail,$sexe,$telephone,$adresse);
     session_start();
     $_SESSION['e-mail'] = $mail;
     include('../vue/inscriptionOk.vue.php');
  }
  else {
    $BDD->insertGraphiste($login,$mdphash,$prenom,$nom,$mail,$sexe,$telephone,$adresse,$portfolio);
    session_start();
    $_SESSION['e-mail'] = $mail;
    include('../vue/inscriptionOk.vue.php');
  }
}
else {
  include("../vue/erreurInscription.vue.php");
}

 ?>
