<?php
class CompteUtilisateur{
  private $mail;
  private $login;
  private $id;
  private $mdp;
  private $nom;
  private $prenom;
  private $sexe;
  private $telephone;
  private $adresse;
}
class CompteAdministrateur extends utilisateur{
  private $admin;
}

class CompteGraphiste extends utilisateur{
  private $graphiste;
  private $nbComEnCours;
}

class CompteClient extends utilisateur{
  private $client;
  private $nbComEnCours;
}
 ?>
