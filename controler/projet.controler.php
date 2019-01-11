<?php
//début session
session_start();
require_once('../model/RequeteClient.class.php');
require_once('../model/ServicesDispo.class.php');
require_once('../model/Compte.class.php');
require_once('../model/gtouchDAO.class.php');
//accès à la BD
$DAO = new gtouchDAO();
global $requete;

if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {
  $idReq=$_GET['idReq'];
  $q="SELECT r.idRequete,r.dateRequete,c.login, s.* FROM  requetesClient r, servicesDispo s, compteClient c WHERE r.idRequete='$idReq' and r.idRequete=s.idService and c.id=r.idClient" ;
  $q=$DAO->db()->query($q);
  $mq = $q->fetchAll();
  $requete= array_unique($mq);
  include("../vue/projet.vue.php");
}
?>
