<?php
session_start();


require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();

/*
if(isset($_SESSION['mail'])){
  include("../vue/page_acceuil.vue.php");
}

else{
  include("../vue/connexion_error.vue.php");
}
*/
include("../vue/page_accueil.vue.php");

?>
