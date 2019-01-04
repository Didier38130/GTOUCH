<?php

ini_set('display_errors', 'on');

  class gtouchDAO{
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

    public function insertMessage($idExpediteur, $idDestinataire, $dateMessage, $objetMessage, $contenuMessage) {
      $query=$this->db->prepare('INSERT INTO messages (idExpediteur, idDestinataire, dateMessage, objetMessage, contenuMessage)
              VALUES(:idExpediteur, :idDestinataire, :dateMessage, :objetMessage,:contenuMessage)');
      $query->execute([
        ':idExpediteur' => $idExpediteur,
        ':idDestinataire' => $idDestinataire,
        ':dateMessage' => $dateMessage,
        ':objetMessage' => $objetMessage,
        ':contenuMessage' => $contenuMessage,
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
      $query = $this->db->prepare("SELECT COUNT(*) FROM CompteGraphiste WHERE mail = '$mail'");
      $query->bindValue('mail', $mail, PDO::PARAM_STR);
      $query->execute();
      $num_row = $query->fetchColumn();
      if ($num_row == 0) {
        return true;
      }
      else {
        return false;
      }
    }

    public function getRequetesClient() : array {
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

    public function getMessageFromIdClient($id) : array {
      $sql = "SELECT * FROM messages WHERE idExpediteur='$id' or idDestinataire='$id'";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS,'Message');
      return $res;
    }

    function getServicesDispo() : array {
      $sql = "SELECT * FROM servicesdispo";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS, 'ServiceDispo');
      return $res;
    }

    public function getServiceFromId($idReq) : ServiceDispo {
      $sql = "SELECT nomService FROM servicesdispo where idService = '$idReq'";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS, 'ServiceDispo');
      return $res[0];
    }

    function getUtilFromMail($mail) : CompteUtilisateur {
      $sql = "SELECT * FROM compteClient WHERE mail='$mail'";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
      return $res[0];
    }

    function getUtilFromLogin($login) : CompteUtilisateur {
      $sql = "SELECT * FROM compteClient WHERE login='$login'";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
      return $res[0];
    }

    function getUtilFromId($id) : CompteUtilisateur {
      $sql = "SELECT * FROM compteClient WHERE id='$id'";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS,'CompteUtilisateur');
      return $res[0];
    }

    public function getIdConvsFromIdClient($id) : array {
      $sql = "SELECT * from messages where idExpediteur = '$id' and idDestinataire not in (select idExpediteur from messages where idDestinataire  = '$id' group by idExpediteur) group by idDestinataire union SELECT * from messages where idDestinataire  = '$id' group by idExpediteur";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS,'Message');
      return $res;
    }

    public function getMessages($idClient, $id) : array {
      $sql = "SELECT * from messages where idExpediteur in ('$idClient', '$id') and idDestinataire in ('$idClient', '$id') order by idMessage DESC";
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

  }
 ?>
