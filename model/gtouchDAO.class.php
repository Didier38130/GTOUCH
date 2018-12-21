)<?php
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
        ':adresse'=> $adresse
      ]);
    }
    function insertClient($login,$mdp,$prenom,$nom,$mail,$sexe,$telephone,$adresse,$portfolio) {
      $query=$this->db->prepare('INSERT INTO compteClient (login,mdp,prenom,nom,mail,sexe,telephone,adresse,portfolio)
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
        ':portfolio'=>$portfolio
      ]);
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


    function getInfoMembre($mail) : bool{
     $sql = "SELECT COUNT(*) AS nbr FROM membres WHERE mail='$mail'";
     $sth = $this->db->query($sql);
     if($sql!=0){
       return false;
     }
     else{
        return true;
     }
     //$dispo = ($sth->fetchColumn()==0)?1:0;

    }

    public function getRequeteClient() : array {
      $sql = "SELECT * FROM requetesClient";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS, 'RequeteClient');
    }

    public function insertRequeteClient($idRequete, $idClient, $listeId, $descripRequete, $dateRequete) {
      $sql = "INSERT INTO requetesClient(idRequete, idClient, listeId, descripRequete, dateRequete)
      VALUES(:idRequete, :idClient, :listeId, :descripRequete, :dateRequete)";
      $sth = $this->db->query($sql);
      $sth->execute([
        ':idRequete' => $idRequete,
        ':idClient' => $idClient,
        ':listeId' => $listeId,
        ':descripRequete' => $descripRequete,
        ':dateRequete' => $dateRequete,
      ]);
      return $this->db->lastInsertId();
    }

    function getServicesDispo() : array {
      $sql = "SELECT * FROM servicesdispo";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS, 'ServiceDispo');
    }
  }
 ?>
