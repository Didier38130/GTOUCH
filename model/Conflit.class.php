<?php
require_once('../model/Compte.class.php');

class Conflit {
  private $idConf;
  private $dateConf;
  private $compteGraphiste;
  private $compteClient;

  public function __construct($idConf, $dateConf, CompteGraphiste $compteGraphiste, CompteClient $compteClient) {
    $this->idConf = $idConf;
    $this->dateConf = $dateConf;
    $this->compteGraphiste = $compteGraphiste;
    $this->compteClient = $compteClient;
  }

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
