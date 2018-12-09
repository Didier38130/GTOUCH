<?php
require_once('../model/Oeuvre.class.php');
require_once('../model/Compte.class.php');

class Portfolio {
  private $idPortF;
  private $oeuvres;
  private $compteGraphiste;

  public function __construct($idPortF, CompteGraphiste $compteGraphiste) {
    $this->idPortF = $idPortF;
    $this->oeuvres = array();
    $this->compteGraphiste = $compteGraphiste;
  }

  public function Add(Oeuvre $oeuvre) {
    array_push($this->oeuvres, $oeuvre);
  }

  public function getOeuvres() {
    return $this->oeuvres;
  }

  public function getIdPortF() {
    return $this->idPortF;
  }

  public function getCompteGraphiste() {
    return $this->compteGraphiste;
  }
}
?>