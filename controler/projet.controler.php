<?php
session_start();
require_once('../model/RequeteClient.class.php');
require_once('../model/ServicesDispo.class.php');
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
$DAO = new gtouchDAO();
global $requete;

if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {
  $idReq=$_GET['idReq'];
<<<<<<< HEAD
  $q="SELECT r.idRequete,r.idClient,r.dateRequete, s.* FROM  requetesClient r, servicesDispo s WHERE r.idRequete='$idReq' and r.idRequete=s.idService" ;
=======
  $q="SELECT r.idRequete,r.idClient, s.* FROM  requetesClient r, servicesDispo s WHERE r.idRequete='$idReq' and r.idRequete=s.idService" ;
>>>>>>> 4cca61f427225a76da4752ce328ab455599f8599
  $q=$DAO->db()->query($q);
  $mq = $q->fetchAll();
  $requete= array_unique($mq);
  include("../vue/projet.vue.php");
}
?>
