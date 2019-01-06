<?php
class RequeteClient {
  private $image;
  private $idRequete;
  private $loginClient;
  private $idClient;
  private $listeId = array();
  //private $descripRequete = array();
  private $idGraphiste;

  public function getIdRequete() {
    return $this->idRequete;
  }

  public function getLoginClient() {
    return $this->loginClient;
  }

  public function getClient() {
    return $this->idClient;
  }

  public function getListeId() : string {
    return $this->listeId;
  }

/*
  public function getDescripRequete() {
    return $this->descripRequete;
  }
*/

public function getIdGraphiste() {
  return $this->idGraphiste;
}

  public function getDateRequete() {
    return $this->dateRequete;
  }

}
?>
