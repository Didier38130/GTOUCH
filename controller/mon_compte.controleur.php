<?php
require_once('../model/gtouchDAO.class.php');
$BDD = new freshCoolingDAO();
$nbErr = 0;

if(isset($_SESSION['login'])){
  include("../vue/mon_compte.vue.php");
}
else{
  include("../vue/connexion.vue.php");
}



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
