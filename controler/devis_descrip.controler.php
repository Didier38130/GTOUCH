<?php
require_once('../model/gtouchDAO.class.php');
//début session
session_start();
//accès à la BD
$DAO = new gtouchDAO();
// si le champ description existe
if (isset($_GET['descrip'])) {
  $_SESSION['descrip'] = $_GET['descrip']; // on sauvegarde son contenu
} else {
  $_SESSION['descrip'] = ''; // sinon rien
}

// si le contenu du champ description existe
if (isset($_SESSION['descrip'])) {
  include('../vue/devis_image.vue.php'); // alors on charge la vue de téléchargement d'image
} else {
  include('../vue/devis_descrip.vue.php'); // sinon on charge la vue du champ description
}
?>
