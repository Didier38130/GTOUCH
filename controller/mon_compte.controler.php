<?php
require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();


if(isset($_SESSION['mail'])){
  include("../vue/mon_compte.vue.php");
}

else{
  include("../vue/connexion.vue.php");
}

 ?>
