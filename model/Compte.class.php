<?php
require_once('../model/Messagerie.class.php');
require_once('../model/Portfolio.class.php');
require_once('../model/Conflit.class.php');
require_once('../model/Panier.class.php');
require_once('../model/ProduitRetouche.class.php');
//require_once('../model/Commande.class.php');
//require_once('../model/Facture.class.php');


class CompteUtilisateur {
  private $idUtil;
  private $loginUtil;
  private $mdpUtil;
  private $messagerieUtil;
  private $prenomUtil;
  private $nomUtil;
  private $mailUtil;
  private $sexeUtil;
  private $telephoneUtil;
  private $adresseUtil;
  private $estOuvert;

  public function __construct($idUtil, $loginUtil, $mdpUtil, Messagerie $messagerieUtil, $prenomUtil, $nomUtil, $mailUtil, $sexeUtil, $telephoneUtil, $adresseUtil, $estOuvert) {
    $this->idUtil = $idUtil;
    $this->loginUtil = $loginUtil;
    $this->mdpUtil = $mdpUtil;
    $this->messagerieUtil = $messagerieUtil;
    $this->prenomUtil = $prenomUtil;
    $this->nomUtil = $nomUtil;
    $this->mailUtil = $mailUtil;
    $this->sexeUtil = $sexeUtil;
    $this->telephoneUtil = $telephoneUtil;
    $this->adresseUtil = $adresseUtil;
    $this->estOuvert = $estOuvert;
  }

  public function getMailUtil() {
    return $this->mailUtil;
  }

  public function getLoginUtil() {
    return $this->loginUtil;
  }

  public function getIdUtil() {
    return $this->idUtil;
  }

  public function getMdpUtil() {
    return $this->mdpUtil;
  }

  public function getNomUtil() {
    return $this->nomUtil;
  }

  public function getPrenomUtil() {
    return $this->prenomUtil;
  }

  public function getSexeUtil() {
    return $this->sexeUtil;
  }

  public function getTelephoneUtil() {
    return $this->telephoneUtil;
  }

  public function adresseUtil() {
    return $this->adresseUtil;
  }

  public function getMessagerieUtil() {
    return $this->messagerieUtil;
  }

}

class CompteAdministrateur extends CompteUtilisateur {}

  class CompteGraphiste extends CompteUtilisateur {
    private $nbComEnCours;
    private $portfolio;
    private $conflitsG;

    public function __construct($nbComEnCours, Portfolio $portfolio) {
      $this->nbComEnCours = $nbComEnCours;
      $this->portfolio = $portfolio;
      $this->conflitsG = array();
    }

    public function getNbComEnCours() {
      return $this->nbComEnCours;
    }

    public function getPortfolio() {
      return $this->portfolio;
    }

    public function getConflitG() {
      return $this->conflitsG;
    }

    public function addConflitG(Conflit $conflitG) {
      array_push($this->conflitsG, $conflitG);
    }

  }

  class CompteClient extends CompteUtilisateur {
    private $nbComEnCours;
    private $produitsRetouches;
    private $conflitsC;
    private $panier;
    private $commandes;
    private $factures;

    public function __construct($nbComEnCours, Panier $panier) {
      $this->nbComEnCours = $nbComEnCours;
      $this->panier = $panier;
      $this->produitsRetouches = array();
      $this->conflitsC = array();
      $this->commandes = array();
      $this->factures = array();
    }

    public function getNbComEnCours() {
      return $this->nbComEnCours;
    }

    public function getProduitsRetouches() {
      return $this->produitsRetouches;
    }

    public function getConflitsC() {
      return $this->conflitsC;
    }

    public function getPanier() {
      return $this->panier;
    }

    public function getCommandes() {
      return $this->commandes;
    }

    public function getFactures() {
      return $this->factures;
    }

    public function addProduitsRetouches(ProduitRetouche $produitRetouche) {
      array_push($this->produitsRetouches, $produitsRetouche);
    }

    public function addConflitC(Conflit $conflitC) {
      array_push($this->conflitsC, $conflitC);
    }

    public function addCommande(Commande $commande) {
      array_push($this->commandes, $commande);
    }

    public function addFacture(Facture $facture) {
      array_push($this->factures, $facture);
    }
  }
  ?>
