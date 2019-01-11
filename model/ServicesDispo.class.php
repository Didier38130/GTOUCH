<?php
// code de l'objet ServicesDispo

class ServicesDispo {
  // attributs privés de l'objet

  private $idService;
  private $nomService;
  private $nomServiceParent;
  private $nomServiceGrandParent;
  private $descripService;
  private $prixService;

  // getters publics sur les attributs privés de l'objet

  public function getIdService() {
    return $this->idService;
  }
  public function getNomService() {
    return $this->nomService;
  }
  public function getNomServiceParent() {
    return $this->nomServiceParent;
  }
  public function getNomServiceGrandParent() {
    return $this->nomServiceGrandParent;
  }
  public function getDescripService() {
    return $this->descripService;
  }
  public function getPrixService() {
    return $this->prixService;
  }
}
?>
