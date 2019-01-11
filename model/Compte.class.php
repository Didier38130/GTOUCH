<?php
require_once('../model/Messagerie.class.php');
require_once('../model/Portfolio.class.php');
require_once('../model/Conflit.class.php');
require_once('../model/Panier.class.php');
require_once('../model/ProduitRetouche.class.php');

// code de l'objet CompteUtilisateur

class CompteUtilisateur {
  // attributs privés de l'objet

  private $id;
  private $login;
  private $mdp;
  private $messagerie;
  private $prenom;
  private $nom;
  private $mail;
  private $sexe;
  private $telephone;
  private $adresse;
  private $estOuvert;

  // getters publics sur les attributs privés de l'objet

  public function getMailUtil() {
    return $this->mail;
  }

  public function getLoginUtil() {
    return $this->login;
  }

  public function getIdUtil() {
    return $this->id;
  }

  public function getMdpUtil() {
    return $this->mdp;
  }

  public function getNomUtil() {
    return $this->nom;
  }

  public function getPrenomUtil() {
    return $this->prenom;
  }

  public function getSexeUtil() {
    return $this->sexe;
  }

  public function getTelephoneUtil() {
    return $this->telephone;
  }

  public function adresseUtil() {
    return $this->adresse;
  }

  public function getMessagerieUtil() {
    return $this->messagerie;
  }

}

  // code de l'objet CompteAdministrateur

  class CompteAdministrateur extends CompteUtilisateur {}

    // code de l'objet CompteGraphiste qui hérite de CompteUtilisateur

  class CompteGraphiste extends CompteUtilisateur {
    // attributs privés de l'objet

    private $nbComEnCours;
    private $portfolio;
    private $conflitsG;

    // getters publics sur les attributs privés de l'objet

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

  // code de l'objet CompteClient qui hérite de CompteUtilisateur

  class CompteClient extends CompteUtilisateur {
    // attributs privés de l'objet

    private $nbComEnCours;
    private $produitsRetouches;
    private $conflitsC;
    private $panier;
    private $commandes;
    private $factures;

    // getters publics sur les attributs privés de l'objet

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
