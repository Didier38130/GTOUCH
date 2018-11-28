<?php
  class gtouchDAO{
    private $db;

    function __construct(){
      try{
        $this->db = new PDO('sqlite:../model/Data/gtouch.db');
      }
      catch(PDOException $e){
        die("erreur de connexion :".$e->getmessage());
      }
    }

    function insertMembre($mail,$mdp) {
      $query=$this->db->prepare('INSERT INTO membres (mail,mdp) VALUES (:mail, :mdp)');
      $query->bindValue(':mail', $mail, PDO::PARAM_STR);
      $query->bindValue(':pass', $mdp, PDO::PARAM_STR);
      $query->execute();
      $query->CloseCursor();
    }

    function getMailMdp($mail) : array {
      $sql = "SELECT mail,mdp FROM membres WHERE mail='$mail'";
      $sth = $this->db->query($sql);
      $res = $sth->fetchAll(PDO::FETCH_CLASS,'Membres');
      return $res;
    }


    function getInfoMembre($mail) : bool{
     $sql = "SELECT COUNT(*) AS nbr FROM membres WHERE mail='$mail'";
     $sth = $this->db->query($sql);
     $dispo = ($sth->fetchColumn()==0)?1:0;
     return $dispo;
    }
  }

 ?>
