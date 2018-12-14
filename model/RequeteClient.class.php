<?php
class RequeteClient {
  private $idRequete;
  private $idClient;
  private $listeId = array();
  private $descripRequete;

  public function getIdRequete() {
    return $this->idRequete;
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

}
?>
