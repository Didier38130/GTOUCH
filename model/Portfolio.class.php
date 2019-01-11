<?php
// code de l'objet Portfolio

class Portfolio {
  // attributs privés de l'objet

  private $idGraphiste;
  private $competences;
  private $logiMaitrises;
  private $descriptionPerso;

  // getters publics sur les attributs privés de l'objet

  public function getId() {
    return $this->idGraphiste;
  }

  public function getCompetences() {
    return $this->competences;
  }

  public function getLogiciels() {
    return $this->logiMaitrises;
  }

  public function getDescription() {
    return $this->descriptionPerso;
  }
}
?>
