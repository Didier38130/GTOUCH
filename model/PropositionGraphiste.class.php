<?php
// code de l'objet PropositionGraphiste

class PropositionGraphiste {
  // attributs privés de l'objet

  private $idReq;
  private $idGraph;
  private $dateProposition;

  // getters publics sur les attributs privés de l'objet

  public function getIdReq() {
    return $this->idReq;
  }

  public function getIdGraph() {
    return $this->idGraph;
  }

  public function getDateProposition() {
    return $this->dateProposition;
  }
}
?>
