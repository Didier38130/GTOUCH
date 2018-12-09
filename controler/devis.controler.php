<?php

require_once('../model/gtouchDAO.class.php');
$BDD = new gtouchDAO();
if(isset($_SESSION['login'])){
  if (isset($_GET['type_retouche_1'])) {
    $type_retouche_1 = $_GET['type_retouche_1'];
  }
  if (isset($_GET['type_retouche_2'])) {
    $type_retouche_2 = $_GET['type_retouche_2'];
  }
  if (isset($_GET['type_retouche_2'])) {
    $type_retouche_2 = $_GET['type_retouche_2'];
  }
  
  include("../vue/devis.vue.php");
}
else{
  include("../vue/offline.vue.php");
}

 ?>
