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
//Récupération de l'id et de la date d'une commande grâce à une requête sql
if ( (!empty($_SESSION["e-mail"]) && !empty($_SESSION["mdp"])) || (!empty($_SESSION["e-mail"])) ) {
  $idReq=$_GET['idReq'];
  $q="SELECT r.idRequete,r.dateRequete, s.* FROM  requetesClient r, servicesDispo s WHERE r.idRequete='$idReq' and r.idRequete=s.idService " ;
  $q=$DAO->db()->query($q);
  $mq = $q->fetchAll();
  $requete= array_unique($mq);
  include("../vue/commande.vue.php");
}
?>
