<?php
require_once('../model/Compte.class.php');
require_once('../model/Devis.class.php');
//require_once('../model/LigneProduit.class.php');

class Panier {
  private $idPan;
  private $dateCreaPan;
  private $totalPan;
  private $compteClient;
  private $devis;
  private $lignesProduit;

  public function __construct($idPan, $dateCreaPan, $totalPan, Compte $compteClient, Devis $devis) {
    $this->idPan = $idPan;
    $this->dateCreaPan = $dateCreaPan;
    $this->totalPan = $totalPan;
    $this->compteClient = $compteClient;
    $this->devis = $devis;
    $this->lignesProduit = array();
  }

  public function getIdPan() {
    return $this->idPan;
  }

  public function getDateCreaPan() {
    return $this->dateCreaPan;
  }

  public function getTotalPan() {
    return $this->totalPan;
  }

  public function getCompteClient() {
    return $this->compteClient;
  }

  public function getDevis() {
    return $this->devis;
  }

  public function getLignesProduit() {
    return $this->lignesProduit;
  }

  public function addLigneProduit(LigneProduit $ligneProduit) {
    array_push($this->lignesProduit, $ligneProduit);
  }
}
?>
