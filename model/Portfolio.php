<?php
class Portfolio {
  private $idPortF;
  private $oeuvres = array();

  public function Add($obj) {
    array_push($this->oeuvres, $obj);
  }
}
?>
