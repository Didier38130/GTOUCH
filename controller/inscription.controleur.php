<?php
require_once('../model/gtouchDAO.class.php');
$BDD = new freshCoolingDAO();
$nbErr = 0;
$mail = $_POST['e-mail'];
$pass = md5($_POST['mdp']);
$confirm = md5($_POST['mdpConfirm']);
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

if ($pass != $confirm || empty($confirm) || empty($pass))
{
    array_push($listErr, "Votre mot de passe et votre confirmation diffèrent, ou sont vides");
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
