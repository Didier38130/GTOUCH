<?php
// Controleur connexion
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//////////////////////////////////////////////////////////////////////////////
// PARTIE USAGE DU MODELE
//////////////////////////////////////////////////////////////////////////////
//accès à la BD
$DAO = new gtouchDAO();

//si le email et le mdp existent et sont non vides
if(!empty($_POST["mail"]) || !empty($_POST["mdp"])) {
  $mail = $_POST["mail"];
  //on récupère les données du client en fonction du mail
  $q1 = $DAO->ClientExiste($mail);
  // ou on récupère les données du graphiste en fonction du mail
  $q2 = $DAO->GraphistetExiste($mail);
  //si c'est un client alors on récupère les données de celui corespondant à l'e-mail
  if ($q1 && !$q2) {
    $requete = "SELECT mdp FROM compteClient WHERE mail='$mail'";
    $q = $DAO->db()->query($requete);
    $mp = $q->fetch();
    //si le mdp est bien le même que celui enregistré
    if(password_verify($_POST["mdp"], $mp[0])) {
      //on ouvre une session
      session_start();
      $_SESSION["e-mail"] = $_POST["mail"];
      $_SESSION["mdp"] = $_POST["mdp"];
      header('Location: compte_client.controler.php');
    }else{
      echo 'Les informations n\'ont pas permis de vous identifier';
    }
  }  // si c'est un graphiste alors on récupère les données de celui corespondant à l'e-mail
  else  if (!$q1 && $q2)  {
    $requete = "SELECT mdp FROM compteGraphiste WHERE mail='$mail'";
    $q = $DAO->db()->query($requete);
    $mp = $q->fetch();
    //si le mdp est bien le même que celui enregistré
    if(password_verify($_POST["mdp"], $mp[0])) {
      //on ouvre une session
      session_start();
      $_SESSION["e-mail"] = $_POST["mail"];
      $_SESSION["mdp"] = $_POST["mdp"];
      header('Location: compte_graphiste.controler.php');
    }else{
      echo 'Les informations n\'ont pas permis de vous identifier';
    }
  }//sinon l'utilisateur n'est pas encore enregistré sur la plateforme
   else {
    echo 'Votre login est inconnu.Veuillez vous inscrire';
  }
}

include('../vue/connexion.vue.php');
?>
