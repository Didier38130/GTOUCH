<?php
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();
$nbErr = 0;

$mail = $_POST['e-mail'];
$login = $_POST['login'];

$mdp = md5($_POST['mdp']);
$mdpConfirm = md5($_POST['mdpConfirm']);
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$sexe = $_POST['sexe'];
$telephone=$_POST['telephone'];
$adresse=$_POST['adresse'];


$listErr = array();

//Vérification du mail

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
if (empty($pseudo))
 {
    array_push($listErr, "Le champ pseudo est vide");
     $nbErr++;
}
//Vérification du mdp

if ($mdp != $mdpConfirm || empty($mdpConfirm) || empty($mdp))
{
    array_push($listErr, "Votre mot de Mot de passe est différent du mot de passe de confirmation");
    $nbErr++;
}
if ($nbErr==0)
{
     $BDD->insertMembre($mail,$mdp);
     $_SESSION['e-mail'] = $mail;
     include('../vue/inscriptionOk.vue.php');
 }
 else
 {
  include("../vue/erreurInscription.vue.php");
 }
 ?>
