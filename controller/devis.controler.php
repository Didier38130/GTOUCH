<?php

require_once('../model/freshCoolingDAO.class.php');
$BDD = new freshCoolingDAO();
if(isset($_SESSION['login'])){
  include("../vue/devis.vue.php");
}
else{
  include("../vue/offline.vue.php");
}

 ?>
