<?php
class Oeuvre {
  private $idOeuvre;
  private $libOeuvre;
  private $descripOeuvre;
  private $lienImage;

  public function getIdOeuvre() {
    return $this->idOeuvre;
  }

  public function getLibOeuvre() {
    return $this->libOeuvre;
  }

  public function getDescripOeuvre() {
    return $this->descripOeuvre;
  }

  public function getLienImage() {
    return $this->lienImage;
  }
}
?>
