<?php
require_once('../model/Produit.class.php');

class ProduitRetouche extends Produit{
  private $idProduitRetouche;
  private $lienImage;

  public function getIdProduitRetouche() {
    return $this->idProduitRetouche;
  }

  public function getLienImage() {
    return $this->lienImage;
  }
}
 ?>
