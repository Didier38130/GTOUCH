<?php
class ServiceDispo {
  private $idService;
  private $nomService;
  private $nomServiceParent;
  private $nomServiceGrandParent;
  private $descripService;

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
}
?>
