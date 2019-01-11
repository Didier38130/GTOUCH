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

  public function updateImageRequeteClient($idRequete, $image) {
    $sql = "UPDATE requetesClient SET image = :image WHERE idRequete = :idRequete";
    $sth = $this->db->prepare($sql);
    $sth->bindParam(':image', $image);
    $sth->bindParam(':idRequete', $idRequete);
    $sth->execute();
    return $this->db->lastInsertId();
  }

  public function updateDescripRequeteClient($idRequete, $descripRequete) {
    $sql = "UPDATE requetesClient SET descripRequete = :descripRequete WHERE idRequete = :idRequete";
    $sth = $this->db->prepare($sql);
    $sth->execute([
      ':idRequete' => $idRequete,
      ':descripRequete' => $descripRequete,
    ]);
    return $this->db->lastInsertId();
  }

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

  function getMailMdp($mail) : array {
    $sql = "SELECT mail,mdp FROM compte WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Membres');
    return $res;
  }

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

  function getServicesDispo() : array {
    $sql = "SELECT * FROM servicesdispo";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'ServicesDispo');
    return $res;
  }

  public function getServiceFromId($idSer) : ServicesDispo {
    $sql = "SELECT * FROM servicesdispo where idService = '$idSer'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'ServicesDispo');
    return $res[0];
  }

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

  function getIdFromMailClient($mail) : array {
    $sql = "SELECT * FROM compteClient WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }

  function getIdFromMailGraphiste($mail) : array {
    $sql = "SELECT * FROM compteGraphiste WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }

  function getIdFromLoginClient($login) : array {
    $sql = "SELECT * FROM compteClient WHERE login='$login'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }

  function getIdFromLoginGraphiste($login) : array {
    $sql = "SELECT * FROM compteGraphiste WHERE login='$login'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }

  function getLoginFromIdClient($id) : array {
    $sql = "SELECT * FROM compteClient WHERE id='$id'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }

  function getLoginFromIdGraphiste($id) : array {
    $sql = "SELECT * FROM compteGraphiste WHERE id='$id'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
    return $res;
  }

  public function getIdConvsFromIdClient($id) : array {
    $sql = "SELECT * from messages where idExpediteur = '$id' and typeExp = 'client' and idDestinataire not in (select idExpediteur from messages where idDestinataire  = '$id' and typeExp = 'graphiste' group by idExpediteur) group by idDestinataire union select * from messages where idDestinataire = '$id' and typeExp = 'graphiste' group by idExpediteur";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Message');
    return $res;
  }

  public function getIdConvsFromIdGraphiste($id) : array {
    $sql = "SELECT * from messages where idExpediteur = '$id' and typeExp = 'Graphiste' and idDestinataire not in (select idExpediteur from messages where idDestinataire  = '$id' and typeExp = 'client' group by idExpediteur) group by idDestinataire union select * from messages where idDestinataire = '$id' and typeExp = 'client' group by idExpediteur";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Message');
    return $res;
  }

  public function getMessages($idClient, $id) : array {
    $sql = "SELECT * from messages where idExpediteur = '$id' and typeExp = 'graphiste' and idDestinataire = '$idClient' union Select * from messages where idExpediteur = '$idClient' and typeExp = 'client' and idDestinataire = '$id' order by idMessage DESC";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS,'Message');
    return $res;
  }

  function ClientExiste($mail) {
    $stmt = $this->db->prepare("SELECT * FROM compteClient WHERE mail=?");
    $stmt->execute([$mail]);
    return $stmt->fetchColumn();
  }

  function GraphistetExiste($mail) {
    $stmt = $this->db->prepare("SELECT * FROM compteGraphiste WHERE mail=?");
    $stmt->execute([$mail]);
    return $stmt->fetchColumn();
  }

  function getRequetesClient() : array {
    $sql = "SELECT * FROM requetesClient";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res;
  }

  public function getRequeteFromId($idReq) : RequeteClient {
    $sql = "SELECT * FROM requetesClient WHERE idRequete = '$idReq'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res[0];
  }

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

  public function getPropositions() : array {
    $sql = "SELECT * FROM propositionGraphiste";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'PropositionGraphiste');
    return $res;
  }

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


  //public function getServiceFromId($idReq) : ServiceDispo {
  //  $sql = "SELECT nomService FROM servicesdispo where idService = '$idReq'";
  //  $sth = $this->db->query($sql);
  //  $res = $sth->fetchAll(PDO::FETCH_CLASS, 'ServiceDispo');
  //  return $res[0];
  //}

  public function getUtilIdPortfolio($id) : array {
    $sql = "SELECT * from portfolio where idGraphiste = '$id'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'Portfolio');
    return $res;
  }

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

  function getInformationsClient($mail) : array {
    $sql = "SELECT * FROM compteClient WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetch();
    return $res;
  }

  function getInformationsGraphiste($mail) : array {
    $sql = "SELECT * FROM compteGraphiste WHERE mail='$mail'";
    $sth = $this->db->query($sql);
    $res = $sth->fetch();
    return $res;
  }

  function getRequeteSansGraphiste($idClient) : array {
    $sql = "SELECT * FROM requetesClient WHERE idClient='$idClient' and idGraphiste = 0 and etatRequete = 'zero'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    return $res;
  }

  function getPropositionsGraphiste($idRequete) : array {
    $sql = "SELECT * FROM propositionGraphiste WHERE idReq='$idRequete'";
    $sth = $this->db->query($sql);
    $res = $sth->fetchAll(PDO::FETCH_CLASS, 'PropositionGraphiste');
    return $res;
  }
}
?>
