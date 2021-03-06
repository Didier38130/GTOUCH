<?php
// code de l'objet RequeteClient

class RequeteClient {
  // attributs privés de l'objet

  private $idRequete;
  private $image;
  private $loginClient;
  private $idClient;
  private $listeId = array();
  private $dateRequete;
  private $descripRequete;
  private $idGraphiste;
  private $etatRequete;

  // getters publics sur les attributs privés de l'objet

  public function getIdRequete() {
    return $this->idRequete;
  }

  public function getImage() {
    return $this->image;
  }

  public function getLoginClient() {
    return $this->loginClient;
  }
  public function getClient() {
    return $this->idClient;
  }
  public function getListeId() {
    return $this->listeId;
  }
  public function getDateRequete() {
    return $this->dateRequete;
  }
  public function getDescripRequete() {
    return $this->descripRequete;
  }
  public function getIdGraphiste() {
    return $this->idGraphiste;
  }

  public function getEtatRequete() {
    return $this->etatRequete;
  }
}
?>
