<?php

require_once('../model/gtouchDAO.class.php');
//$BDD = new gtouchDAO();

//Récupération des services parents disponibles cochés
if (isset($_GET['nomServiceGrandparent_1'])) {
  $nomServiceGrandparent_1 = $_GET['nomServiceGrandparent_1'];
}
if (isset($_GET['nomServiceGrandparent_2'])) {
  $nomServiceGrandparent_2 = $_GET['nomServiceGrandparent_2'];
}
if (isset($_GET['nomServiceGrandparent_3'])) {
  $nomServiceGrandparent_3 = $_GET['nomServiceGrandparent_3'];
}

//Récupération des services parents disponibles cochés
if (isset($_GET['nomServiceParent_1'])) {
  $nomServiceParent_1 = $_GET['nomServiceParent_1'];
}
if (isset($_GET['nomServiceParent_2'])) {
  $nomServiceParent_2 = $_GET['nomServiceParent_2'];
}
if (isset($_GET['nomServiceParent_3'])) {
  $nomServiceParent_3 = $_GET['nomServiceParent_3'];
}
if (isset($_GET['nomServiceParent_4'])) {
  $nomServiceParent_4 = $_GET['nomServiceParent_4'];
}

//Récupération des services disponibles cochés
if (isset($_GET['nomService_1'])) {
  $nomService_1 = $_GET['nomService_1'];
}
if (isset($_GET['nomService_2'])) {
  $nomService_2 = $_GET['nomService_2'];
}
if (isset($_GET['nomService_3'])) {
  $nomService_3 = $_GET['nomService_3'];
}
if (isset($_GET['nomService_4'])) {
  $nomService_4 = $_GET['nomService_4'];
}
if (isset($_GET['nomService_5'])) {
  $nomService_5 = $_GET['nomService_5'];
}
if (isset($_GET['nomService_6'])) {
  $nomService_6 = $_GET['nomService_6'];
}
if (isset($_GET['nomService_7'])) {
  $nomService_7 = $_GET['nomService_7'];
}
if (isset($_GET['nomService_8'])) {
  $nomService_8 = $_GET['nomService_8'];
}
if (isset($_GET['nomService_9'])) {
  $nomService_9 = $_GET['nomService_9'];
}
if (isset($_GET['nomService_10'])) {
  $nomService_10 = $_GET['nomService_10'];
}
include("../vue/devis.vue.php");

/*
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
*/

 ?>