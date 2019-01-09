<?php
class Portfolio {

  private $idGraphiste;
  private $competences;
  private $logiMaitrises;
  private $descriptionPerso;

  //public function Add(Oeuvre $oeuvre) {
  //  array_push($this->oeuvres, $oeuvre);
  //}

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
