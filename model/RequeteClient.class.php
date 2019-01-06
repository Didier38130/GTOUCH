<?php
class RequeteClient {
  private $image;
  private $idRequete;
  private $idClient;
  private $listeId = array();
  private $descripRequete;
  private $dateRequete;

  public function getIdRequete() {
    return $this->idRequete;
  }

  public function getImage() {
    return $this->image;
  }

  public function getClient() {
    return $this->idClient;
  }

  public function getListeId() : array {
    return $this->listeId;
  }

  public function getDescripRequete() {
    return $this->descripRequete;
  }

  public function getDateRequete() {
    return $this->dateRequete;
  }

}
?>
