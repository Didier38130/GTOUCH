<?php

require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();
if(isset($_SESSION['login'])){
  include("../vue/devis.vue.php");
}
else{
  include("../vue/offline.vue.php");
}

 ?>
