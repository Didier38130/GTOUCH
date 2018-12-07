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

    function insertMembre($id,$login,$mdp,$prenom,$nom,$sexe,$telephone,$adresse) {
      $query=$this->db->prepare('INSERT into compte (id,login,mdp,prenom,nom,mail,sexe,telephone,adresse)
      values(:id,:login,:mdp,:prenom,:nom,:mail,:sexe,:telephone,:adresse);');
      
      $query->bindValue(':id', $id, PDO::PARAM_STR);
      $query->bindValue(':login', $login, PDO::PARAM_STR);
      $query->bindValue(':mdp', $mdp, PDO::PARAM_STR);
      $query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
      $query->bindValue(':nom', $nom, PDO::PARAM_STR);
      $query->bindValue(':mail', $sexe, PDO::PARAM_STR);
      $query->bindValue(':telephone', $telephone, PDO::PARAM_STR);
      $query->bindValue(':adresse', $adresse, PDO::PARAM_STR);

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
