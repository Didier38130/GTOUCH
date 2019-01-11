<?php
// code de l'objet Message

class Message {
  // attributs privés de l'objet

  private $idMess;
  private $idExpediteur;
  private $idDestinataire;
  private $dateMessage;
  private $objetMessage;
  private $contenuMessage;
  private $typeExp;

  // getters publics sur les attributs privés de l'objet

  public function getIdMess() {
    return $this->idMess;
  }

  public function getTypeExp() {
    return $this->typeExp;
  }

  public function getIdDest() {
    return $this->idDestinataire;
  }

  public function getIdExp() {
    return $this->idExpediteur;
  }

  public function getDateMessage() {
    return $this->dateMessage;
  }

  public function getObjetMessage() {
    return $this->objetMessage;
  }

  public function getContenuMess() {
    return $this->contenuMessage;
  }
}
?>
