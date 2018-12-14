<?php
class Devis {
  private $idDevis;
  private $montantDevis;
  private $panier;
  private $requeteService;

  public function __construct($idDevis, $montantDevis, Panier $panier, RequeteService $requeteService) {
    $this->idDevis = $idDevis;
    $this->montantDevis = $montantDevis;
    $this->panier = $panier;
    $this->requeteService = $requeteService;
  }

  public function getIdDevis() {
    return $this->idDevis;
  }

  public function getMontantDevis() {
    return $this->montantDevis;
  }

  public function getPanier() {
    return $this->panier;
  }

  public function getRequeteService() {
    return $this->requeteService;
  }
}
?>
