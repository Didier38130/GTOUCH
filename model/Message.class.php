<?php
class Message {
  private $idMess;
  private $idExpediteur;
  private $idDestinataire;
  private $dateMessage;
  private $objetMessage;
  private $contenuMessage;

  public function getIdMess() {
    return $this->idMess;
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
