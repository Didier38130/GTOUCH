<?php

ini_set('display_errors', 'on');

class gtouchDAO {
  private $db;

  function __construct(){
    try{
      $this->db = new PDO('sqlite:../model/data/gtouch.db');
    }
    catch(PDOException $e){
      die("erreur de connexion :".$e->getmessage());
    }
  }

  function db() {
    return $this->db;
  }
  // insertion des données d'un nouveau client dans la base
  function insertClient($login,$mdp,$prenom,$nom,$mail,$sexe,$telephone,$adresse) {
    $query=$this->db->prepare('INSERT INTO compteClient (login,mdp,prenom,nom,mail,sexe,telephone,adresse)
    VALUES(:login,:mdp,:prenom,:nom,:mail,:sexe,:telephone,:adresse)');
    $query->execute([
      ':login' => $login,
      ':mdp'=> $mdp,
      ':prenom'=> $prenom,
      ':nom'=> $nom,
      ':mail'=> $mail,
      ':sexe'=> $sexe,
      ':telephone'=> $telephone,
      ':adresse'=> $adresse,
    ]);
  }
  // insertion des données d'un nouveau graphiste dans la base
  function insertGraphiste($login,$mdp,$prenom,$nom,$mail,$sexe,$telephone,$adresse,$portfolio) {
    $query=$this->db->prepare('INSERT INTO compteGraphiste (login,mdp,prenom,nom,mail,sexe,telephone,adresse,portfolio)
    VALUES(:login,:mdp,:prenom,:nom,:mail,:sexe,:telephone,:adresse,:portfolio)');
    $query->execute([
      ':login' => $login,
      ':mdp'=> $mdp,
      ':prenom'=> $prenom,
      ':nom'=> $nom,
      ':mail'=> $mail,
      ':sexe'=> $sexe,
      ':telephone'=> $telephone,
      ':adresse'=> $adresse,
      ':portfolio'=>$portfolio,
    ]);
  }
  // insertion des données d'un nouvelle requête dans la base
  public function insertRequeteClient($loginClient, $idClient, $listeId, $dateRequete) {
    $sql = "INSERT INTO requetesClient(loginClient, idClient, listeId, dateRequete)
    VALUES(:loginClient, :idClient, :listeId, :dateRequete)";
    $sth = $this->db->prepare($sql);
    $sth->execute([
      ':loginClient' => $loginClient,
      ':idClient' => $idClient,
      ':listeId' => $listeId,
      ':dateRequete' => $dateRequete,
    ]);
    return $this->db->lastInsertId();
  }
  // mise à jour des données d'une requête dans la base pour ajouter une image
  public function updateImageRequeteClient($idRequete, $image) {
    $sql = "UPDATE requetesClient SET image = :image WHERE idRequete = :idRequete";
    $sth = $this->db->prepare($sql);
    $sth->bindParam(':image', $image);
    $sth->bindParam(':idRequete', $idRequete);
    $sth->execute();
    return $this->db->lastInsertId();
  }
  // mise à jour des données d'une requête dans la base pour ajouter un texte descriptif
  public function updateDescripRequeteClient($idRequete, $descripRequete) {
    $sql = "UPDATE requetesClient SET descripRequete = :descripRequete WHERE idRequete = :idRequete";
    $sth = $this->db->prepare($sql);
    $sth->execute([
      ':idRequete' => $idRequete,
      ':descripRequete' => $descripRequete,
    ]);
    return $this->db->lastInsertId();
  }
  // mise à jour des données de l'état d'une requête dans la base
  public function updateEtatRequeteClient($idRequete, $etat) {
    $sql = "UPDATE requetesClient SET etatRequete = :etatRequete WHERE idRequete = :idRequete";
    $sth = $this->db->prepare($sql);
    $sth->execute([
      ':etatRequete' => $etat,
      ':idRequete' => $idRequete,
    ]);
  }
  // insertion des données d'un nouveau message dans la base
  public function insertMessage($idExpediteur, $idDestinataire, $dateMessage, $objetMessage, $contenuMessage, $typeExp) {
    $query=$this->db->prepare('INSERT INTO messages (idExpediteur, idDestinataire, dateMessage, objetMessage, contenuMessage, typeExp)
    VALUES(:idExpediteur, :idDestinataire, :dateMessage, :objetMessage,:contenuMessage, :typeExp)');
    $query->execute([
      ':idExpediteur' => $idExpediteur,
      ':idDestinataire' => $idDestinataire,
      ':dateMessage' => $dateMessage,
      ':objetMessage' => $objetMessage,
      ':contenuMessage' => $contenuMessage,
      ':typeExp' => $typeExp,
    ]);
  }
  // insertion des données d'un nouveau graphiste dans la base
  public function insertPorfolio($idGraphiste, $competences, $logiMaitrises, $descriptionPerso) {
    $query=$this->db->prepare('INSERT INTO portfolio (idGraphiste, competences, logiMaitrises, descriptionPerso)
    VALUES(:idGraphiste, :competences, :logiMaitrises, :descriptionPerso)');
    $query->execute([
      ':idGraphiste' => $idGraphiste,
      ':competences' => $competences,
      ':logiMaitrises' => $logiMaitrises,
      ':descriptionPerso' => $descriptionPerso,
    ]);
  }

  public function getCompteConnexion(string $mail, string $mdp) {
    $sql = "SELECT * FROM compteClient WHERE mail = '$mail' AND mdp = '$mdp'";
    $sth = $this->db->query($sql);
    $result=$sth->fetchAll(PDO::FETCH_CLASS, 'CompteUtilisateur');
    if ($result != NULL) {
      return $result[0];
    } else {
      return NULL;
    }
  }

  function getSelect() : array {
    $sql = "SELECT * FROM compte";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'compte');
    return $res;
  }
  // récupérer le mail et le mot de passe d'un compte pour un mail donné
  function getMailMdp($mail) : array {
    $sql = "SELECT mail,mdp FROM compte WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Membres');
    return $res;
  }
  // récupérer les informations d'un client pour un mail donné
  function getInfoClient($mail) : bool {
    $sql = "SELECT * FROM compteClient WHERE mail = '$mail'";
    $sth = $this->db->query($sql);
    $result=$sth->fetchAll(PDO::FETCH_CLASS, 'CompteUtilisateur');
    if ($result == NULL) {
      return true;
    } else {
      return false;
    }
  }
  // récupérer les informations d'un graphiste pour un mail donné
  function getInfoGraphiste($mail) : bool {
    $sql = "SELECT * FROM compteGraphiste WHERE mail = '$mail'";
    $sth = $this->db->query($sql);
    $result=$sth->fetchAll(PDO::FETCH_CLASS, 'CompteUtilisateur');
    if ($result == NULL) {
      return true;
    } else {
      return false;
    }
  }
  // récupérer les informations d'un client pour un login donné
  function getInfoClientLogin($login) : bool {
    $sql = "SELECT * FROM compteClient WHERE login = '$login'";
    $sth = $this->db->query($sql);
    $result=$sth->fetchAll(PDO::FETCH_CLASS, 'CompteUtilisateur');
    if ($result == NULL) {
      return true;
    } else {
      return false;
    }
  }
  // récupérer les informations d'un graphiste pour un login donné
  function getInfoGraphisteLogin($login) : bool {
    $sql = "SELECT * FROM compteGraphiste WHERE login = '$login'";
    $sth = $this->db->query($sql);
    $result=$sth->fetchAll(PDO::FETCH_CLASS, 'CompteUtilisateur');
    if ($result == NULL) {
      return true;
    } else {
      return false;
    }
  }
  // récupérer tous les services de retouche dispos
  function getServicesDispo() : array {
    $sql = "SELECT * FROM servicesdispo";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'ServicesDispo');
    return $res;
  }
  // récupérer le service de retouche dispo pour un id de service donné
  public function getServiceFromId($idSer) : array {
    $sql = "SELECT * FROM servicesdispo where idService = '$idSer'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'ServicesDispo');
    return $res;
  }
  // récupérer les informations d'un utilisateur pour un mail donné
  function getUtilFromMail($mail) : CompteUtilisateur {
    $sql = "SELECT * FROM compteClient WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    if ($res != NULL) {
      return $res[0];
    } else {
      $sql = "SELECT * FROM compteGraphiste WHERE mail='$mail'";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
      if ($res != NULL) {
        return $res[0];
      }
    }
  }
  // récupérer l'id d'un client pour un mail donné
  function getIdFromMailClient($mail) : array {
    $sql = "SELECT * FROM compteClient WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }
  // récupérer l'id d'un graphiste pour un mail donné
  function getIdFromMailGraphiste($mail) : array {
    $sql = "SELECT * FROM compteGraphiste WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }
  // récupérer l'id d'un client pour un login donné
  function getIdFromLoginClient($login) : array {
    $sql = "SELECT * FROM compteClient WHERE login='$login'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }
  // récupérer l'id d'un graphiste pour un login donné
  function getIdFromLoginGraphiste($login) : array {
    $sql = "SELECT * FROM compteGraphiste WHERE login='$login'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }
  // récupérer le login d'un client pour un id donné
  function getLoginFromIdClient($id) : array {
    $sql = "SELECT * FROM compteClient WHERE id='$id'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }
  // récupérer le login d'un graphiste pour un id donné
  function getLoginFromIdGraphiste($id) : array {
    $sql = "SELECT * FROM compteGraphiste WHERE id='$id'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }
  // récupérer l'id de conversation pour un id client donné
  public function getIdConvsFromIdClient($id) : array {
    $sql = "SELECT * from messages where idExpediteur = '$id' and typeExp = 'client' and idDestinataire not in (select idExpediteur from messages where idDestinataire  = '$id' and typeExp = 'graphiste' group by idExpediteur) group by idDestinataire union select * from messages where idDestinataire = '$id' and typeExp = 'graphiste' group by idExpediteur";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Message');
    return $res;
  }
  // récupérer l'id de conversation pour un id graphiste donné
  public function getIdConvsFromIdGraphiste($id) : array {
    $sql = "SELECT * from messages where idExpediteur = '$id' and typeExp = 'Graphiste' and idDestinataire not in (select idExpediteur from messages where idDestinataire  = '$id' and typeExp = 'client' group by idExpediteur) group by idDestinataire union select * from messages where idDestinataire = '$id' and typeExp = 'client' group by idExpediteur";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Message');
    return $res;
  }
  // récupérer tous les messages pou un id d'expediteur et id de destinateur donné
  public function getMessages($idClient, $id) : array {
    $sql = "SELECT * from messages where idExpediteur = '$id' and typeExp = 'graphiste' and idDestinataire = '$idClient' union Select * from messages where idExpediteur = '$idClient' and typeExp = 'client' and idDestinataire = '$id' order by idMessage DESC";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Message');
    return $res;
  }
  // permet de savoir si un client existe
  function ClientExiste($mail) {
    $stmt = $this->db->prepare("SELECT * FROM compteClient WHERE mail=?");
    $stmt->execute([$mail]);
    return $stmt->fetchColumn();
  }
  // permet de savoir si un graphiste existe
  function GraphistetExiste($mail) {
    $stmt = $this->db->prepare("SELECT * FROM compteGraphiste WHERE mail=?");
    $stmt->execute([$mail]);
    return $stmt->fetchColumn();
  }
  // récupérer toutes les requêtes de client
  function getRequetesClient() : array {
    $sql = "SELECT * FROM requetesClient";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res;
  }
  // récupérer une requete pour un id de requête donné
  public function getRequeteFromId($idReq) : RequeteClient {
    $sql = "SELECT * FROM requetesClient WHERE idRequete = '$idReq'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res[0];
  }
  // ajoute les données d'une proposition de prise en charge de commande par un graphiste
  public function addProposition($idReq, $idGraph, $dateProposition) {
    $sql = "INSERT INTO propositionGraphiste (idReq, idGraph, dateProposition)
    VALUES (:idReq, :idGraph, :dateProposition)";
    $sth = $this->db->prepare($sql);
    $sth->execute([
      ':idReq' => $idReq,
      ':idGraph' => $idGraph,
      ':dateProposition' => $dateProposition,
    ]);
    return $this->db->lastInsertId();
  }
  // récupérer toutes les propositions de prise en charge de commande par un graphiste
  public function getPropositions() : array {
    $sql = "SELECT * FROM propositionGraphiste";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'PropositionGraphiste');
    return $res;
  }
  // permet de vérifier si la personne connecté est un graphiste
  public function mailDeGraphiste($mail) : bool {
    $sql = "SELECT * FROM compteGraphiste WHERE mail = '$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'compteGraphiste');
    if ($res != NULL) {
      return true;
    } else {
      return false;
    }
  }
  // récupérer le portfolio pour un id d'utilisateur donné
  public function getUtilIdPortfolio($id) : array {
    $sql = "SELECT * from portfolio where idGraphiste = '$id'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'Portfolio');
    return $res;
  }
  // récupérer tous les portfolios
  public function getPortfolio() : array {
    $sql = "SELECT * from portfolio";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'Portfolio');
    return $res;
  }

  public function getPortfolioId($id) : array {
    $sql = "SELECT * from portfolio where idGraphiste = '$id'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'Portfolio');
    return $res;
  }
  // récupérer les données d'un client pour un mail donné
  function getInformationsClient($mail) : array {
    $sql = "SELECT * FROM compteClient WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetch();
    return $res;
  }
  // récupérer les données d'un graphiste pour un mail donné
  function getInformationsGraphiste($mail) : array {
    $sql = "SELECT * FROM compteGraphiste WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetch();
    return $res;
  }
  // récupérer les requêtes pour un id de client donné et pour lesquelles aucun graphiste ne s'est proposé
  function getRequeteSansGraphiste($idClient) : array {
    $sql = "SELECT * FROM requetesClient WHERE idClient='$idClient' and idGraphiste = 0 and etatRequete = 'zero'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res;
  }
  // récupérer le proposition de prise en charge de commande par un graphiste pour un id de requete donné
  function getPropositionsGraphiste($idRequete) : array {
    $sql = "SELECT * FROM propositionGraphiste WHERE idReq='$idRequete'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'PropositionGraphiste');
    return $res;
  }
  // récupérer les commandes en cours pour un id de graphiste donné
  function getRequetesEnCoursGraphiste($idGraphiste) : array {
    $sql = "SELECT * FROM requetesClient WHERE idGraphiste='$idGraphiste' and etatRequete = 'encours' or etatRequete = 'zero'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res;
  }
  // récupérer les commandes en cours pour un id de client donné
  function getRequetesEnCoursClient($idClient) : array {
    $sql = "SELECT * FROM requetesClient WHERE idClient='$idClient' and etatRequete = 'encours' or etatRequete = 'zero'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res;
  }
  // récupérer les requêtes terminées pour un id de graphiste donné
  function getRequetesTermineesGraphiste($idGraphiste) : array {
    $sql = "SELECT * FROM requetesClient WHERE idGraphiste='$idGraphiste' and etatRequete = 'terminee'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res;
  }
  // récupérer les requêtes terminées pour un id de client donné
  function getRequetesTermineesClient($idClient) : array {
    $sql = "SELECT * FROM requetesClient WHERE idClient='$idClient' and etatRequete = 'terminee'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res;
  }
}
?>
