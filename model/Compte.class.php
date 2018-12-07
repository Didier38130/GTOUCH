<?php
require_once('../model/Messagerie.class.php')

class CompteUtilisateur{
  private $idUtil;
  private $loginUtil;
  private $mdpUtil;
  private $messagerieUtil;
  private $prenomUtil;
  private $nomUtil;
  private $mailUtil;
  private $sexeUtil;
  private $telephoneUtil;
  private $adresseUtil;

  public function __construct($idUtil, $loginUtil, $mdpUtil, Messagerie $messagerieUtil, $prenomUtil, $nomUtil, $mailUtil, $sexeUtil, $telephoneUtil, $adresseUtil) {
    $this->idUtil = $idUtil;
    $this->loginUtil = $loginUtil;
    $this->mdpUtil = $mdpUtil;
    $this->messagerieUtil = new Messagerie();
    $this->prenomUtil = $prenomUtil;
    $this->nomUtil = $nomUtil;
    $this->mailUtil = $mailUtil;
    $this->sexeUtil = $sexeUtil;
    $this->telephoneUtil = $telephoneUtil;
    $this->adresseUtil = $adresseUtil;
  }

  public function getMailUtil() {
    return $this->mailUtil;
  }

  public function getLoginUtil() {
    return $this->loginUtil;
  }

  public function getIdUtil() {
    return $this->idUtil;
  }

  public function getMdpUtil() {
    return $this->mdpUtil;
  }

  public function getNomUtil() {
    return $this->nomUtil;
  }

  public function getPrenomUtil() {
    return $this->prenomUtil;
  }

  public function getSexeUtil() {
    return $this->sexeUtil;
  }

  public function getTelephoneUtil() {
    return $this->telephoneUtil;
  }

  public function adresseUtil() {
    return $this->adresseUtil;
  }

  public function getMessagerieUtil() {
    return $this->messagerieUtil;
  }

}
class CompteAdministrateur extends utilisateur{
  private $admin;
}

class CompteGraphiste extends utilisateur{
  private $graphiste;
  private $nbComEnCours;
  private $portfolio;
}

class CompteClient extends utilisateur{
  private $client;
  private $nbComEnCours;
}
 ?>
