<?php
session_start();

date_default_timezone_set('UTC');

//Récupération des services grands parents disponibles cochés
if (isset($_GET['nomServiceGrandparent_1'])) {
  $nomServiceGrandparent_1 = $_GET['nomServiceGrandparent_1'];
}
if (isset($_GET['nomServiceGrandparent_2'])) {
  $nomServiceGrandparent_2 = $_GET['nomServiceGrandparent_2'];
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
if (isset($_GET['nomService_0'])) {
  $nomService_0 = $_GET['nomService_0'];
}
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

//Récupération des détails de chaque service
if (isset($_GET['details_service_0'])) {
  $details_service_0 = $_GET['details_service_0'];
}
if (isset($_GET['details_service_1'])) {
  $details_service_1 = $_GET['details_service_1'];
}
if (isset($_GET['details_service_2'])) {
  $details_service_2 = $_GET['details_service_2'];
}
if (isset($_GET['details_service_3'])) {
  $details_service_3 = $_GET['details_service_3'];
}
if (isset($_GET['details_service_4'])) {
  $details_service_4 = $_GET['details_service_4'];
}
if (isset($_GET['details_service_5'])) {
  $details_service_5 = $_GET['details_service_5'];
}
if (isset($_GET['details_service_6'])) {
  $details_service_6 = $_GET['details_service_6'];
}
if (isset($_GET['details_service_7'])) {
  $details_service_7 = $_GET['details_service_7'];
}
if (isset($_GET['details_service_8'])) {
  $details_service_8 = $_GET['details_service_8'];
}
if (isset($_GET['details_service_9'])) {
  $details_service_9 = $_GET['details_service_9'];
}
if (isset($_GET['details_service_10'])) {
  $details_service_10 = $_GET['details_service_10'];
}

if (isset($_GET['Valider']) && (isset($nomService_0) || isset($nomService_1) || isset($nomService_3)
|| isset($nomService_4) || isset($nomService_5) || isset($nomService_6)
|| isset($nomService_7) || isset($nomService_8) || isset($nomService_9)
|| isset($nomService_10))) {

  $tableauID = array();

  if (isset($nomService_0)) {
    array_push($tableauID, $nomService_0);
  }
  if (isset($nomService_1)) {
    array_push($tableauID, $nomService_1);
  }
  if (isset($nomService_2)) {
    array_push($tableauID, $nomService_2);
  }
  if (isset($nomService_3)) {
    array_push($tableauID, $nomService_3);
  }
  if (isset($nomService_4)) {
    array_push($tableauID, $nomService_4);
  }
  if (isset($nomService_5)) {
    array_push($tableauID, $nomService_5);
  }
  if (isset($nomService_6)) {
    array_push($tableauID, $nomService_6);
  }
  if (isset($nomService_7)) {
    array_push($tableauID, $nomService_7);
  }
  if (isset($nomService_8)) {
    array_push($tableauID, $nomService_8);
  }
  if (isset($nomService_9)) {
    array_push($tableauID, $nomService_9);
  }
  if (isset($nomService_10)) {
    array_push($tableauID, $nomService_10);
  }

  $listeId = implode("|", $tableauID);

  $tableauDescrip = array();

  if (isset($detailService_0)) {
    array_push($tableauDescrip, '0'.$detailService_0);
  }
  if (isset($detailService_1)) {
    array_push($tableauDescrip, '1'.$detailService_1);
  }
  if (isset($detailService_2)) {
    array_push($tableauDescrip, '2'.$detailService_2);
  }
  if (isset($detailService_3)) {
    array_push($tableauDescrip, '3'.$detailService_3);
  }
  if (isset($detailService_4)) {
    array_push($tableauDescrip, '4'.$detailService_4);
  }
  if (isset($detailService_5)) {
    array_push($tableauDescrip, '5'.$detailService_5);
  }
  if (isset($detailService_6)) {
    array_push($tableauDescrip, '6'.$detailService_6);
  }
  if (isset($detailService_7)) {
    array_push($tableauDescrip, '7'.$detailService_7);
  }
  if (isset($detailService_8)) {
    array_push($tableauDescrip, '8'.$detailService_8);
  }
  if (isset($detailService_9)) {
    array_push($tableauDescrip, '9'.$detailService_9);
  }
  if (isset($detailService_10)) {
    array_push($tableauDescrip, '10'.$detailService_10);
  }

  $descripRequete = implode("|", $tableauDescrip);

  $idRequete = count($DAO->getAnnonces())+1;

  $dateRequete = date("j/m/Y");

  /* // récuperer l'id du client connecté à faire

  session_start();
  if (isset($_SESSION["newsession"])) {
    $idClient = $_SESSION["newsession"];
  }
  */

  include("../vue/formulaireEnvoye.vue.php");
} else {
  include("../vue/devis.vue.php");
}

 ?>
