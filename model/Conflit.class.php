<?php
require_once('../model/Compte.class.php');

// code de l'objet Conflit

class Conflit {
  // attributs privés de l'objet

  private $idConf;
  private $dateConf;
  private $compteGraphiste;
  private $compteClient;

  // getters publics sur les attributs privés de l'objet

  public function getIdConf() {
    return $this->idConf = $idConf;
  }

  public function getDateConf() {
    return $this->dateConf = $dateConf;
  }

  public function getCompteGraphiste() {
    return $this->compteGraphiste = $compteGraphiste;
  }

  public function getCompteClient() {
    return $this->compteClient = $compteClient;
  }
}
?>
