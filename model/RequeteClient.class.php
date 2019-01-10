<?php
class RequeteClient {
  private $idRequete;
  private $image;
  private $loginClient;
  private $idClient;
  private $listeId = array();
  private $dateRequete;
  private $descripRequete;
  private $idGraphiste;
  private $etatRequete;

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
}
?>
